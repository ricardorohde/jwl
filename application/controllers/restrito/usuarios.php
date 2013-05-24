<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        /*
         * Carregando os dados necessários (helpers, models, etc.)
         */
        $this->load->helper('usuarios');
        $this->load->model("restrito/usuarios_model");
        
          /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
        
    }

    function index() {
        $data['titulo'] = "Sistema Administrativo - Área Restrita - Usuários";
        $data['usuarios'] = $this->usuarios_model->listar();
     
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/usuarios', $data);
        $this->load->view('restrito/elementos/footer', $data);
       
    }

    function cadastro() {
        $data['titulo'] = "Sistema Administrativo - Área Restrita - Usuários/Cadastro";
        $data['error'] = "";
        $data['secao'] = "usuarios";

        
        /* Pegando as informações da tabela Estados */
        $this->db->order_by("nome_estado");
        $busca = $this->db->get("estados");
        $data['estados'] = $busca->result();
        
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/usuarios_cadastro', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function add() {
          
		  	$aux_login='';
            $dados['username']      = $this->input->post("username");
            $dados['login']         = $this->input->post("login");
            $dados['senha']         = $this->input->post("senha");
            $senha2['senha2']         = $this->input->post("senha2");
            $dados['email']         = $this->input->post("email");
            $dados['ativo']         = $this->input->post("ativo");
			
			$vSQL = $this->db->query('SELECT login FROM users WHERE login = "'.$dados['login'].'"');
			foreach ($vSQL->result_array() as $row){
			   $aux_login = $row['login'];
			}
		//=========================== existe usuario igual ?? =====================	
			if ($dados['login'] == $aux_login){
				$this->session->set_flashdata('alerta', 'Login: '.$aux_login.' já existe!');
                redirect(base_url() . 'restrito/usuarios', 'refresh');
			}
		//=============================== senha igual =============================
			if ($dados['senha'] != $senha2['senha2']){
				$this->session->set_flashdata('alerta', 'Senhas estao diferentes');
                redirect(base_url() . 'restrito/usuarios', 'refresh');
			}
        //=========================================================================    
            if ($this->usuarios_model->insere($dados)) {
				
					/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Cadastrou novo usuário";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Usuario: '.$dados['login'];
				 	 	
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
				
                $this->session->set_flashdata('sucesso', 'Usuário criado com sucesso');
                redirect(base_url() . 'restrito/usuarios', 'refresh');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao criar usuário');
                redirect(base_url() . 'restrito/usuarios', 'refresh');
            }	
  	}
    
    
    
    function alterar($id=null) {
           
        if(empty($id)){
           $id = $this->session->userdata('iduser');
           $data['retorno'] = 'home';
        } else {
           $data['retorno'] = 'usuarios';
        }
        
        $data['titulo'] = "Sistema Administrativo - Área Restrita - Usuários";
     
        /*Recebendo o id do registro escolhido*/
        $data['usuarios'] = $this->usuarios_model->registro($id);
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/usuarios_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
    function alt() {
        
            $dados['idusers']       = $this->input->post("idusers");
            $dados['username']      = $this->input->post("username");
            $dados['login']         = $this->input->post("login");
            $dados['senha']         = $this->input->post("senha");
            $dados['email']         = $this->input->post("email");
            $dados['ativo']         = $this->input->post("ativo");
            

            if ($this->usuarios_model->alterar($dados)) {
				
					/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou dados de um usuário";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Usuario: '.$dados['login'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
				
                $this->session->set_flashdata('sucesso', 'Usuário alterado com sucesso');
                redirect(base_url() . 'restrito/usuarios' , 'refresh');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao alterar usuário');
                redirect(base_url() . 'restrito/usuarios', 'refresh');
            }
        }
   
    
    function apagar($id){
       
	   $pSQL = $this->db->query('SELECT login FROM users WHERE idusers = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['login'];
		}
		
       if ( $this->usuarios_model->deletar($id)){
		   
		   	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Deletou um usuário";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Usuario: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
		   
		   
             $this->session->set_flashdata('sucesso', 'Usuário Apagado com sucesso');
             redirect(base_url() . 'restrito/usuarios', 'refresh');
       } else {
             $this->session->set_flashdata('erro', 'Erro ao eliminar usuário');
             redirect(base_url() . 'restrito/usuarios', 'refresh');
       }
        
    }
    


  }

?>
