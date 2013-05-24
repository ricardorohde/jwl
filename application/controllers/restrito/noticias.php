<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noticias extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/noticias_model');
        
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
       
        $data['noticias'] = $this->noticias_model->listar();
        
        /* Chama o ck editor */
        $this->load->helper('ckeditor');
          $data['ckeditor_texto'] = array(
            'id' => 'texto',
            'path' => 'assets/js/ckeditor',
            'config' => array(
                'toolbar' => 'Full',
                'width' => '95%',
                'height' => '450px',
                'filebrowserBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            )
        );

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/noticias', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo noticia no banco de dados
         */
        
        $data['titulo'] = $this->input->post('titulo');
        $data['texto']  = $this->input->post('texto');
        $data['data']   = date('Y-m-d');
        $data['fonte']  = $this->input->post('fonte');
        $data['ativo']  = $this->input->post('ativo');
        
        if ($this->noticias_model->insere($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu noticia";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Noticia: '.$data['titulo'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'noticia criada com sucesso');
            redirect(base_url() . 'restrito/noticias');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar a noticia');
            redirect(base_url() . 'restrito/noticias');
        }
    }
      function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        
        $data['noticia'] = $this->noticias_model->registro($id);
        
          /* Chama o ck editor */
        $this->load->helper('ckeditor');
          $data['ckeditor_texto'] = array(
            'id' => 'texto',
            'path' => 'assets/js/ckeditor',
            'config' => array(
                'toolbar' => 'Full',
                'width' => '95%',
                'height' => '450px',
                'filebrowserBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            )
        );

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/noticias_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um noticia no banco de dados
         */
        
        $data['titulo']     = $this->input->post('titulo');
        $data['texto']      = $this->input->post('texto');
        $data['data']       = date('Y-m-d');
        $data['fonte']      = $this->input->post('fonte');
        $data['ativo']      = $this->input->post('ativo');
        $data['idnoticias'] = $this->input->post('idnoticias');
        
        if ($this->noticias_model->altera($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou noticia";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Noticia: '.$data['titulo'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			
			
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'noticia alterado com sucesso');
            redirect(base_url() . 'restrito/noticias');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o noticia');
            redirect(base_url() . 'restrito/noticias');
        }
    }
    
    function del($id){
		$pSQL = $this->db->query('SELECT titulo FROM noticias WHERE idnoticias = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['titulo'];
		}
		
          if ($this->noticias_model->deleta($id)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Apagou noticia";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Noticia: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			  
			  
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'noticia removido com sucesso');
            redirect(base_url() . 'restrito/noticias');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o noticia');
            redirect(base_url() . 'restrito/noticias');
        }
    }
    
}

?>
