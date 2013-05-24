<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Empresa extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    function index(){
       
        $this->quemsomos();
        
    }

    function quemsomos() {
       
       $data['titulo'] = "Metron Engenharia | Quem Somos";
       
       /* Puxando os Banners do Banco */
       $this->load->model('restrito/editorias_model');
       $data['editoria'] = $this->editorias_model->listaPorSecao('1');
       
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
      // $this->load->view('elementos/banners-interno', $data);
       $this->load->view('editorias', $data);
       $this->load->view('elementos/footer');
     
    }
    
    function premios() {
       
       $data['titulo'] = "Metron Engenharia | Prêmios e Certificações";
       
       /* Puxando os Banners do Banco */
       $this->load->model('restrito/editorias_model');
       $data['editoria'] = $this->editorias_model->listaPorSecao('2');
       
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('editorias', $data);
       $this->load->view('elementos/footer');
     
    }
    
     function sustenta() {
       
       $data['titulo'] = "Metron Engenharia | Sustentabilidade e Responsabilidade Social";
       
       
       /* Puxando os Banners do Banco */
       $this->load->model('restrito/editorias_model');
       $data['editoria'] = $this->editorias_model->listaPorSecao('3');
       
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('editorias', $data);
       $this->load->view('elementos/footer');
     
    }
    
       function realizadas() {
       
       $data['titulo'] = "Metron Engenharia | Obras Realizadas";
       
       
       /* Puxando os imóveis do Banco de Dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listarConcluidos();
       
       
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('realizados', $data);
       $this->load->view('elementos/footer');
     
    }
    

}

?>
