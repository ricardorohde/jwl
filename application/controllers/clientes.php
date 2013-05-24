<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientes extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    function assistencia() {
       
       $data['titulo'] = "Metron Engenharia | Assistência Técnica";
     
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('assistencia', $data);
       $this->load->view('elementos/footer');
     
    }
    
    function indices() {
        
       $this->load->model('restrito/indices_model');
       $data['anos'] = $this->indices_model->anos();
       $data['indices'] = $this->indices_model->listar();
       
       
       $data['titulo'] = "Metron Engenharia | Índices";
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('indices', $data);
       $this->load->view('elementos/footer');
     
    }
    
     function atendimento() {
       
       $data['titulo'] = "Metron Engenharia | Atendimento ao Cliente";
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('atendimento', $data);
       $this->load->view('elementos/footer');
     
    }
    
     function ligamos() {
       
       $data['titulo'] = "Metron Engenharia | Ligamos para Você";
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('ligamos', $data);
       $this->load->view('elementos/footer');
     
    }
    
     function visitas() {
       
       $data['titulo'] = "Metron Engenharia | Agendamento de Visitas";
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('visitas', $data);
       $this->load->view('elementos/footer');
     
    }
    
     function vendas() {
       
       $data['titulo'] = "Metron Engenharia | Central de Vendas";
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('vendas', $data);
       $this->load->view('elementos/footer');
     
    }
    

}

?>
