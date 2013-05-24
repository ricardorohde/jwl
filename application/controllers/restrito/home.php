<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    function index() {
        
        /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
        
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/homepage', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
      function logon() {
        
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
       
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/form_login', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function login() {       
       
            $data['login'] = $this->input->post('sislogin');
            $data['senha'] = $this->input->post('sissenha');

            $this->load->model('restrito/usuarios_model');
            $login = $this->usuarios_model->login($data);
            if (count($login) > 0) {
                $this->load->library('session');
                $newdata = array(
                    'nome_usuario' => $login[0]->username,
                    'iduser'  => $login[0]->idusers,
                    'usuario' => $data['login'],
                    'loggedin' => TRUE
                );
                $this->session->set_userdata($newdata);
				
				/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $login[0]->idusers;
				$status['action'] = "Logou no painel";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Conectou';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'login: '.$data['login'];
				
				$this->stats_model->insere($status);
				
				/* Fim do bloco */
				
                redirect(base_url() . 'restrito/home', 'refresh');
            } else {
                $this->session->set_flashdata('erro', 'Login/Senha Incorretos');
                redirect(base_url() . 'restrito/imoveis');                
            }
        
    }

    function logout() {
		$id_logado = $this->session->userdata('iduser');
		$pSQL = $this->db->query('SELECT login FROM users WHERE idusers = '.$id_logado);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['login'];
		}
		/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Deslogou do painel";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Deconectou';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'login: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
				
				
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }


}

?>
