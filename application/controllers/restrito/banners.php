<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Banners extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/banners_model');
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
        $data['error'] = "";
        $data['secao'] = "produtos";
        
        $data['banners'] = $this->banners_model->listar();

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/banners', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo banner no banco de dados
         */
        
        $data['titulo'] = $this->input->post('titulo');
        $data['arte'] = $this->input->post('arte');
        $data['link'] = $this->input->post('link');
        $data['ativo'] = $this->input->post('ativo');
        	
			if($data['link']==''){
				$data['link']='#';
			}
		
        if ($this->banners_model->insere($data)) {
			
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu banner";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Banner: '.$data['titulo'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Banner criado com sucesso');
            redirect(base_url() . 'restrito/banners');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o banner');
            redirect(base_url() . 'restrito/banners');
        }
    }
      function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
        $data['error'] = "";
        $data['secao'] = "produtos";
        
        $data['banner'] = $this->banners_model->registro($id);

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/banners_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um banner no banco de dados
         */
        
        $data['titulo'] = $this->input->post('titulo');
        $data['arte']   = $this->input->post('arte');
        $data['link']   = $this->input->post('link');
        $data['ativo']  = $this->input->post('ativo');
        $data['idbanner'] = $this->input->post('idbanner');
        
			if($data['link']==''){
				$data['link']='#';
			}
        if ($this->banners_model->altera($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou banner";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Banner: '.$data['titulo'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Banner alterado com sucesso');
            redirect(base_url() . 'restrito/banners');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o banner');
            redirect(base_url() . 'restrito/banners');
        }
    }
    
    function del($id){
		$pSQL = $this->db->query('SELECT titulo FROM banners WHERE idbanner = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['titulo'];
		} 
		
          if ($this->banners_model->deleta($id)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Excluiu banner";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Banner: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Banner removido com sucesso');
            redirect(base_url() . 'restrito/banners');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o banner');
            redirect(base_url() . 'restrito/banners');
        }
    }
    
}

?>
