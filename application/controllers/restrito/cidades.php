<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cidades extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/estados_model');
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
       
        $data['estados'] = $this->estados_model->listar();
        $data['cidades'] = $this->cidades_model->listar();
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/cidades', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo noticia no banco de dados
         */
        
        $data['iduf'] = $this->input->post('idestado');
        $data['cidade']  = $this->input->post('cidade');
        
        
        if ($this->cidades_model->insere($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu cidade";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Cidade: '.$data['cidade'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'cidade criada com sucesso');
            redirect(base_url() . 'restrito/cidades');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar a cidade');
            redirect(base_url() . 'restrito/cidades');
        }
    }
      function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        $data['estados'] = $this->estados_model->listar();
        $data['cidades'] = $this->cidades_model->registro($id);
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/cidades_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um noticia no banco de dados
         */
        
        $data['idcidade']     = $this->input->post('idcidade');
        $data['iduf']     = $this->input->post('idestado');
        $data['cidade']       = $this->input->post('cidade');
       
        
        if ($this->cidades_model->altera($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou cidade";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Aletrar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Cidade: '.$data['cidade'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'cidade alterado com sucesso');
            redirect(base_url() . 'restrito/cidades');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o noticia');
            redirect(base_url() . 'restrito/cidades');
        }
    }
    
    function apagar($id){
        $pSQL = $this->db->query('SELECT cidade FROM cidades WHERE idcidade = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['cidade'];
		} 
		 
          if ($this->cidades_model->deleta($id)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Apagou cidade";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Cidade: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'cidade removida com sucesso');
            redirect(base_url() . 'restrito/cidades');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover a cidade');
            redirect(base_url() . 'restrito/cidades');
        }
    }
    
}

?>
