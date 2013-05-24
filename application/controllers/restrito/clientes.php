<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientes extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        /*
         * Carregando os dados necessários (helpers, models, etc.)
         */
        $this->load->helper('usuarios');
        $this->load->model("restrito/clientes_model");
        
          /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
        
    }

    function index() {
        $data['titulo'] = "Sistema Administrativo - Área Restrita - Clientes/Cadastros";
        $data['cadastros'] = $this->clientes_model->listarTudo('acesso');  //acesso será o order by
     
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/clientes', $data);
        $this->load->view('restrito/elementos/footer', $data);
       
    }
    
     function listar() {
         
        $tipo = $this->input->post('tipocli');
        
        /* Muda os parâmetros conforme o tipo escolhido */
        switch($tipo) {
            
            case 'tudo':
            case '':
                $pagina = 'clientes';
                $secao  = 'Listando Tudo';
                $like   = '';
            break;
        
            case 'agende':
                $pagina = 'clientes_agende';
                $secao  = 'Agende uma visita';
                $like   = 'Agend';
            break;
        
            case 'assistencia':
                $pagina = 'clientes_assistencia';
                $secao  = 'Assistência Técnica';
                $like   = 'Assist';
            break;
        
            case 'atendimento':
                $pagina = 'clientes_atendimento';
                $secao  = 'Atendimento Online';
                $like   = 'Atendim';
            break;
        
            case 'contato':
                $pagina = 'clientes_contato';
                $secao  = 'Contato';
                $like   = 'Contato';
            break;
        
            case 'ligamos':
                $pagina = 'clientes_ligamos';
                $secao  = 'Ligamos para Você';
                $like   = 'Ligamos';
            break;
        
              
           
        }
        /* End dos parâmetros principais.*/
           
            
        
         
        $data['titulo'] = "Sistema Administrativo - Área Restrita - Clientes/Cadastros";
        $data['cadastros'] = $this->clientes_model->listarTudo('acesso', $like);  //acesso será o order by  // like é o termo de busca
        
        if (!empty($secao)){
            $data['secao'] = $secao;
        } else {
            $data['secao'] = '';
        }
        
     
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/'.$pagina, $data);
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
         
			$dados['idusers']       = $this->input->post("idusers");
            $dados['username']      = $this->input->post("username");
            $dados['login']         = $this->input->post("login");
            $dados['senha']         = $this->input->post("senha");
            $dados['email']         = $this->input->post("email");
            $dados['ativo']         = $this->input->post("ativo");
            

            if ($this->usuarios_model->insere($dados)) {
				
					/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Cadastrou cliente ";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Nome: '.$data['username'];
				
				$this->stats_model->insere($status);
   
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
				$status['action'] = "Alterou cadastro cliente ";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Nome: '.$data['username'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
				
				
                $this->session->set_flashdata('sucesso', 'Usuário alterado com sucesso');
                redirect(base_url() . 'restrito/' . $retorno , 'refresh');
            } else {
                $this->session->set_flashdata('erro', 'Erro ao alterar usuário');
                redirect(base_url() . 'restrito/' . $retorno, 'refresh');
            }
        }
   
    
    function apagar($id){
       
       if ( $this->usuarios_model->deletar($id)){
		   	$busc2 = $this->db->query('SELECT estado FROM estados WHERE idestado = '.$id);
        		$data['estado'] = $busc2->result();

		   
		   	/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Apagou cadastro cliente";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Nome: '.$data['username'];
				
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
