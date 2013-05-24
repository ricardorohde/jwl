<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bairros extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/bairros_model');
        $this->load->model('restrito/cidades_model');
        
          /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
        
        
    }
    
    function index() {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        $data['cidades'] = $this->cidades_model->listar();
        $data['bairros'] = $this->bairros_model->listar();
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/bairros', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo noticia no banco de dados
         */
        
        $data['idcidade'] = $this->input->post('idcidade');
        $data['bairro']  = $this->input->post('bairro');
        
        if ($this->bairros_model->insere($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu bairro";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Bairro: '.$data['bairro'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'bairro criada com sucesso');
            redirect(base_url() . 'restrito/bairros');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o bairro');
            redirect(base_url() . 'restrito/bairros');
        }
    }
     
    
    function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        $data['cidades'] = $this->cidades_model->listar();
        $data['bairros'] = $this->bairros_model->registro($id);
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/bairros_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um noticia no banco de dados
         */
        
        $data['idbairro']   = $this->input->post('idbairro');
        $data['idcidade']   = $this->input->post('idcidade');
        $data['bairro']     = $this->input->post('bairro');
       	        
        if ($this->bairros_model->altera($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou bairro";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Aletrar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Bairro: '.$data['bairro'];
				
				$this->stats_model->insere($status);

            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Bairro alterado com sucesso');
            redirect(base_url() . 'restrito/bairros');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o Bairro');
            redirect(base_url() . 'restrito/bairros');
        }
    }
    
    function apagar($id){
        $pSQL = $this->db->query('SELECT bairro FROM bairros WHERE idbairro = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['bairro'];
		} 
		
		if ($this->bairros_model->deleta($id)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Apagou bairro";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Bairro: '.$aux;
				
				$this->stats_model->insere($status);

            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Bairro removida com sucesso');
            redirect(base_url() . 'restrito/bairros');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o Bairro');
            redirect(base_url() . 'restrito/bairros');
        }
    }
    
}

?>
