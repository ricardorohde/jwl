<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    

    function index() {
       
       $data['titulo'] = "JWL Negócios Imobiliários";
       
       /* Puxando os Banners do Banco */
       $this->load->model('restrito/banners_model');
       $data['banners'] = $this->banners_model->listarAtivos();
       
       /* Puxando os imóveis Destaque para o Carrossel */
       $this->load->model('restrito/imoveis_model');
       $data['destaques'] = $this->imoveis_model->listarDestaques();
       
       /* Puxando as notícias do Mundo Metron*/ 
       $this->load->model('restrito/noticias_model');
       $data['noticias'] = $this->noticias_model->listar();
       
       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       $this->load->view('elementos/banners', $data);
       $this->load->view('elementos/home-destaques', $data);
       $this->load->view('elementos/home-baixo', $data);
       $this->load->view('elementos/footer');
     
    }
    
    function contato(){
       
       $data['titulo'] = "Metron Engenharia | Contato";
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('contato', $data);
       $this->load->view('elementos/footer');
        
    }
    function enviar(){
       
       
        
        /* responsável pelo cadastro do "Ligamos para você */
        $data['nome'] = $this->input->post('cnome');
        $data['email'] = $this->input->post('cemail');
        $data['telefone'] = $this->input->post('ctel');
        $data['celular'] = $this->input->post('ccel');
        $data['depto'] = $this->input->post('cdepto');
        $data['empreendimento'] = $this->input->post('cempr');
        $data['cidade'] = $this->input->post('ccidade');
        $data['bairro'] = $this->input->post('cbairro');
        $data['comentario'] = $this->input->post('ccoments');
        $data['informativo'] = $this->input->post('cnews');
        $data['acesso'] = date('Y-m-d H:m:s');
        $data['secao'] = 'Contato';
        /* uso do operador ternário para quando o cliente não marcar que deseja news ter o valor correto atribuido 'n'*/
        
        if ($this->grava($data) == true) {
            $this->session->set_flashdata('sucesso', 'Mensagem Enviada com sucesso');
            redirect(base_url() . 'home/contato');
        }
    }
    
     function noticia($id){
       
       $data['titulo'] = "Metron Engenharia | Mundo Metron";
       
       /* Puxando as notícias do Mundo Metron*/ 
       $this->load->model('restrito/noticias_model');
       $data['noticias'] = $this->noticias_model->registro($id);
       
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       $this->load->view('elementos/banners-interno', $data);
       $this->load->view('noticias', $data);
       $this->load->view('elementos/footer');
        
    }
    
    function procurar(){
       
            $termo = $this->input->post('procura');
            /*a busca retornará todos os registros cujo termo apareça no titulo ou no texto, mas serão
             *agrupadas pelo id, para que não apareça nada repetido.
             */
            
            $busca = $this->db->query('
                                           SELECT * FROM noticias 
                                           WHERE titulo LIKE "%'.$termo.'%" 
                                           OR texto LIKE "%'.$termo.'%"
                                           GROUP BY idnoticias
                                           ORDER BY data DESC
                                      ');
            $data['busca'] = $busca->result();
            
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('noticias_busca', $data);
       $this->load->view('elementos/footer');
        
    }
    
     public function grava($dados){
       
        if ($this->db->insert('cadastro', $dados)) {
            return true;
        } else {
            return false;
        }
        
    }

}

?>
