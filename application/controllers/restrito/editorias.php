<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editorias extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('restrito/editorias_model');
          /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
    }
    
    function pegaSecao($id) {
       /*Pega a editoria*/
        $this->db->where('idsite', $id);
        $search = $this->db->get('site');
        $pega = $search->result();        
        return ($pega[0]->secao); 
    }
    
    function ver($id) {
      
        $data['editoria']   = $this->pegaSecao($id); 
        $data['titulo']     = "Sistema Administrativo - Área Restrita";       
        $data['editorias']  = $this->editorias_model->listaTudo($id);
        $data['ideditoria'] = $id;
        
        /* Chama o ck editor */
        $this->load->helper('ckeditor');
          $data['ckeditor_cont'] = array(
            'id' => 'cont',
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
        $this->load->view('restrito/editorias', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add(){
        /*
         * Adiciona um novo noticia no banco de dados
         */
        
        $data['titulo']    = $this->input->post('titulo');
        $data['idsecao']   = $this->input->post('idsecao');
        $data['conteudo']  = $this->input->post('cont');
        $data['data']      = date('Y-m-d');
        $data['keywords']  = $this->input->post('keywords');
        $data['metatags']  = $this->input->post('metatags');
        $data['ativo']     = $this->input->post('ativo');
        
        if ($this->editorias_model->insere($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu texto na area Empresa";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Titulo: '.$data['titulo'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'noticia criada com sucesso');
            redirect(base_url() . 'restrito/editorias/ver/' . $this->input->post('idsecao'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar a noticia');
            redirect(base_url() . 'restrito/editorias/ver/' . $this->input->post('idsecao'));
        }
    }
      function alterar($id) {
          
        $data['editoria'] = $this->editorias_model->listaId($id);
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
        
          /* Chama o ck editor */
        $this->load->helper('ckeditor');
          $data['ckeditor_cont'] = array(
            'id' => 'cont',
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
        $this->load->view('restrito/editorias_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt(){
        /*
         * Altera um noticia no banco de dados
         */
        $data['id']        = $this->input->post('id');
        $data['titulo']    = $this->input->post('titulo');
        $data['idsecao']   = $this->input->post('idsecao');
        $data['conteudo']  = $this->input->post('cont');
        $data['data']      = date('Y-m-d');
        $data['keywords']  = $this->input->post('keywords');
        $data['metatags']  = $this->input->post('metatags');
        $data['ativo']     = $this->input->post('ativo');
        
        if ($this->editorias_model->altera($data)) {
			
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou texto da area Empresa";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Titulo: '.$data['titulo'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'editoria alterado com sucesso');
            redirect(base_url() . 'restrito/editorias/ver/' . $this->input->post('idsecao'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar a editoria');
            redirect(base_url() . 'restrito/editorias/ver/' . $this->input->post('idsecao'));
        }
    }
    
    function apagar($id){
		$pSQL = $this->db->query('SELECT titulo FROM estatico WHERE idcidade = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['titulo'];
		} 
		
        /*Descobre a seção, para retornar à pagina certa dpois*/
      
         $info = $this->editorias_model->listaId($id);
         $x = $info[0]->idsecao;
        
         /*
         * Remove um noticia no banco de dados
         */
          if ($this->editorias_model->deleta($id)) {
			  
			  	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Deletou texto da area Empresa";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Titulo: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'noticia removido com sucesso');
            redirect(base_url() . 'restrito/editorias/ver/' . $x);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o noticia');
            redirect(base_url() . 'restrito/editorias/ver/' . $x);
        }
    }
    
}

?>
