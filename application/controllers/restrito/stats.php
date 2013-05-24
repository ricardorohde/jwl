<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stats extends CI_Controller {

    function index() {
        
        /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
        
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
		
		$this->load->model('restrito/stats_model');
		$data['estados'] = $this->stats_model->listar($this->session->userdata('iduser'));
		
       
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/stats', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }
    
 
}

?>
