<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Indices extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/indices_model');
        
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
        $data['indices'] = $this->indices_model->listar();
        $data['anos'] = $this->indices_model->anos();

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/indices', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
     function abrir($ano) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
        $data['indices'] = $this->indices_model->listarAno($ano);
        $data['ano'] = $ano;

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/indices_ver', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo banner no banco de dados
         */
        
        $data['ano']       = $this->input->post('ano');
        $data['mes']       = $this->input->post('mes');
        $data['cubvar']    = $this->input->post('cubvar');
        $data['cubval']    = $this->input->post('cubval');
        $data['igpmvar']   = $this->input->post('igpmvar');
        $data['trvar']     = $this->input->post('trvar');
        $data['poupvar']   = $this->input->post('poupvar');
        $data['ipcavar']   = $this->input->post('ipcavar');
        
        
        if ($this->indices_model->insere($data)) {
			
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "inseriu índice";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			
			
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Novo indice Cadastrado');
            redirect(base_url() . 'restrito/indices/abrir/' . $data['ano']);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o indice');
            redirect(base_url() . 'restrito/indices');
        }
    }
      function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
        $data['indices'] = $this->indices_model->registro($id);
        

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/indices_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um indice no banco de dados
         */
        
        $data['id']       = $this->input->post('id');
        $data['ano']       = $this->input->post('ano');
        $data['mes']       = $this->input->post('mes');
        $data['cubvar']    = $this->input->post('cubvar');
        $data['cubval']    = $this->input->post('cubval');
        $data['igpmvar']   = $this->input->post('igpmvar');
        $data['trvar']     = $this->input->post('trvar');
        $data['poupvar']   = $this->input->post('poupvar');
        $data['ipcavar']   = $this->input->post('ipcavar');
        
        if ($this->indices_model->altera($data)) {
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "alterou índice";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Indice alterado com sucesso');
            redirect(base_url() . 'restrito/indices/abrir/' . $data['ano']);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o índice');
            redirect(base_url() . 'restrito/indices/abrir/' . $data['ano']);
        }
    }
    
    function delano($ano){
        $registro =  $this->indices_model->registro($ano);
        
        /*
         * Remove um banner no banco de dados
         */
          if ($this->indices_model->deletano($ano)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "apagou ano índices";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			  
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Indice removido com sucesso');
            redirect(base_url() . 'restrito/indices');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o o índice');
            redirect(base_url() . 'restrito/indices');
    }
 }
    
    function delmes($id){
        $registro =  $this->indices_model->registro($id);
        
        /*
         * Remove um banner no banco de dados
         */
          if ($this->indices_model->deletames($id)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "apagou mes indices";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Indice removido com sucesso');
            redirect(base_url() . 'restrito/indices/abrir/' . $registro[0]->ano);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o o índice');
            redirect(base_url() . 'restrito/indices/abrir/' . $registro[0]->ano);
        }
    }
    
}

?>
