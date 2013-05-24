<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Estados extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/estados_model');
        
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
       

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/estados', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo noticia no banco de dados
         */
        
        $data['estado'] = $this->input->post('estado');
       
        
        if ($this->estados_model->insere($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu estado";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Estado: '.$data['estado'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'estado criada com sucesso');
            redirect(base_url() . 'restrito/estados');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o estado');
            redirect(base_url() . 'restrito/estados');
        }
    }
      function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        
        $data['estados'] = $this->estados_model->registro($id);
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/estados_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um noticia no banco de dados
         */
        
        $data['estado']        = $this->input->post('estado');
        $data['idestado']      = $this->input->post('idestado');
      
        
        if ($this->estados_model->altera($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou estados";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Estado: '.$data['estado'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			
			
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'estado alterado com sucesso');
            redirect(base_url() . 'restrito/estados');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o estado');
            redirect(base_url() . 'restrito/estados');
        }
    }
    
    function apagar($id){
        $pSQL = $this->db->query('SELECT estado FROM estados WHERE idestado = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['estado'];
		}
					 
          if ($this->estados_model->deleta($id)) {

			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Apagou estado";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Estado: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			//cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'estado removido com sucesso');
            redirect(base_url() . 'restrito/estados');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o estado');
            redirect(base_url() . 'restrito/estados');
        }
    }
    
}

?>
