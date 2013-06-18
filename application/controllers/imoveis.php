<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imoveis extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    

    function index() {
       
       $data['titulo'] = "JWL Negócios Imobiliários | Todos os imóveis";
       $data['tit']    = "Todos os imóveis";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar();
//       
//       /* Puxando os imóveis Destaque para o Carrossel */
//       $this->load->model('restrito/imoveis_model');
//       $data['destaques'] = $this->imoveis_model->listar();
//       
//       /* Puxando as notícias do Mundo Metron*/ 
//       $this->load->model('restrito/noticias_model');
//       $data['noticias'] = $this->noticias_model->listar();
       
       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
     
    }
/*====================================  Apartamentos  ====================================*/		    
    function apartamentos(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_imoveis('Apartamento');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 1 quartos ========*/
    function apartamento_1qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos de 1 Quarto";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_ap_quarto('1 quarto');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 2 quartos ========*/
    function apartamento_2qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos de 2 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_ap_quarto('2 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 3 quartos ========*/
    function apartamento_3qt(){
       
       $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos de 3 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_ap_quarto('3 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 4 quartos ========*/
    function apartamento_4qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos de 4 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_ap_quarto('4 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= mais de 4 quartos ========*/
    function apartamento_5qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos com mais de 4 quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_ap_mais_quarto('mais de 4 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }

/*====================================  Casa  ====================================*/			
	function casa(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Casa";
          $data['tit']    = "Casa";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_imoveis('Casa');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 1 quarto ========*/
    function casa_1qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Casa de 1 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_casa_quarto('1 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 2 quartos ========*/
    function casa_2qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Casa de 2 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_casa_quarto('2 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 3 quartos ========*/
    function casa_3qt(){
       
       $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos de 3 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_casa_quarto('3 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 4 quartos ========*/
    function casa_4qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos de 4 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_casa_quarto('4 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= mais de 4 quartos ========*/
    function casa_5qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Apartamentos";
          $data['tit']    = "Apartamentos com mais de 4 quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_casa_mais_quarto('mais de 4 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }	
/*====================================  Kitnet  ====================================*/		
	    function kitnet(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Kitnet";
          $data['tit']    = "Kitnet";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_imoveis('Kitnet');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 1 quarto ========*/
    function kitnet_1qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Kitnet";
          $data['tit']    = "Kitnet de 1 Quarto";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_kitnet_quarto('1 quarto');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }	
/*======= 2 quartos ========*/
    function kitnet_2qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Kitnet";
          $data['tit']    = "Kitnet de 2 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_kitnet_quarto('2 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 3 quartos ========*/
    function kitnet_3qt(){
       
       $data['titulo'] = "JWL Negócios Imobiliários | Kitnet";
          $data['tit']    = "Kitnet de 3 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_kitnet_quarto('3 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= 4 quartos ========*/
    function kitnet_4qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Kitnet";
          $data['tit']    = "Kitnet de 4 Quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_kitnet_quarto('4 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }
/*======= mais de 4 quartos ========*/
    function kitnet_5qt(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Kitnet";
          $data['tit']    = "Kitnet com mais de 4 quartos";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_kitnet_mais_quarto('mais de 4 quartos');

       
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer');
        
    }

/*========================================================================================*/	
/*========================================================================================*/		
	
	function compra(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Comprar";
          $data['tit']    = "Imoveis para Comprar";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo('1');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/

	function compra_apartamento(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Comprar";
          $data['tit']    = "Apartamento para Comprar";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_apartamento('1');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/

	function compra_casa(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Comprar";
          $data['tit']    = "Casa para Comprar";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_casa('1');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/
	
	function compra_kitnet(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Comprar";
          $data['tit']    = "Kitnet para Comprar";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_kitnet('1');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }

/*========================================================================================*/	
/*========================================================================================*/		
/*========================================================================================*/

	function aluguel(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Aluguel";
          $data['tit']    = "Imoveis para Alguel";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo('2');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }
	
/*#####################################################################*/

	function aluguel_apartamento(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Aluguel";
          $data['tit']    = "Apartamento para Aluguel";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_apartamento('2');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/

	function aluguel_casa(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Aluguel";
          $data['tit']    = "Casa para Aluguel";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_casa('2');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/
	
	function aluguel_kitnet(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Aluguel";
          $data['tit']    = "Kitnet para Aluguel";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_kitnet('2');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }

/*========================================================================================*/	
/*========================================================================================*/		
/*========================================================================================*/	
	
	function financiamento(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Financiamento";
          $data['tit']    = "Imoveis para Financiamento";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo('3');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }
	
/*#####################################################################*/

	function financiamento_apartamento(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Financiamento";
          $data['tit']    = "Apartamento para Financiamento";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_apartamento('3');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/

	function financiamento_casa(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Financiamento";
          $data['tit']    = "Casa para Financiamento";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_casa('3');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }	

/*#####################################################################*/
	
	function financiamento_kitnet(){
       
          $data['titulo'] = "JWL Negócios Imobiliários | Financiamento";
          $data['tit']    = "Kitnet para Financiamento";
       
       /* Puxando todos os imoveis do banco de dados */
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->listar_tipo_kitnet('3');
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis', $data);
       $this->load->view('elementos/footer'); 
    }

/*========================================================================================*/		
/*========================================================================================*/	
	

    
    function ver($id) {
       /* Contando o clique */
       $this->clicks($id);
       
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
        
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_ver', $data);
       $this->load->view('elementos/footer');
    }
    
    function plantas($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Apresentação";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
       $data['plantas'] = $this->imoveis_model->getPlantas($id);
               
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_plantas', $data);
       $this->load->view('elementos/footer');
    }
    
    function perspectivas($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Perspectivas";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
       $data['persp'] = $this->imoveis_model->getPerp($id);
               
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_perspectivas', $data);
       $this->load->view('elementos/footer');
    }
    
    function lazer($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Lazer e Serviços";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
       $data['lazer'] = $this->imoveis_model->getLazer($id);
               
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_lazer', $data);
       $this->load->view('elementos/footer');
    }
    
    function localizacao($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Localização";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
                     
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_localizacao', $data);
       $this->load->view('elementos/footer');
    }
    
     function valores($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Valores";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
                     
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_valores', $data);
       $this->load->view('elementos/footer');
    }
    
     function realizacao($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Realização";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
                     
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_realizacao', $data);
       $this->load->view('elementos/footer');
    }
    
    function videos($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Vídeos";
       
       $this->load->model('restrito/imoveis_model');

       $data['imoveis'] = $this->imoveis_model->registro($id);
       $data['videos'] = $this->imoveis_model->getVideos($id);
                     
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_videos', $data);
       $this->load->view('elementos/footer');
    }
    
    function acesse($id) {
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Acesse";
       
       $this->load->model('restrito/imoveis_model');
       $imoveis = $this->imoveis_model->registro($id);
       
       redirect($imoveis[0]->acesse);
       
       
                     
//       $this->load->view('elementos/header', $data);
//       $this->load->view('elementos/topo');
//       //$this->load->view('elementos/banners-interno', $data);
//       $this->load->view('imoveis_acesse', $data);
//       $this->load->view('elementos/footer');
    }
    
    function acompanhamento($id){
       $data['titulo'] = "JWL Negócios Imobiliários | Imóveis | Acesse";
       
       $this->load->model('restrito/imoveis_model');
       $data['imoveis'] = $this->imoveis_model->registro($id);
       
       //gráfico
       $this->db->where('idimovel', $id);
       $sql1 = $this->db->get('imoveis_acompanhamento');
       $data['grafico'] = $sql1->result();
       
       //datas
      
       $sq2 = $this->db->query('select * from imoveis_acompanhamento_stats where idimovel = '.$id.' group by data order by data desc');
       $data['datas'] = $sq2->result();
       
       
       //ultimas fotos (da ultima data cadastrada)
       @$ultimadata = $data['datas'][0]->data;
       
       $sq3 = $this->db->query('select * from imoveis_acompanhamento_stats where idimovel = '.$id.' and data="'.$ultimadata.'"');
       $data['ultimas'] = $sq3->result();
                             
       $this->load->view('elementos/header', $data);
       $this->load->view('elementos/topo');
       //$this->load->view('elementos/banners-interno', $data);
       $this->load->view('imoveis_acompanhamento', $data);
       $this->load->view('elementos/footer');
    }
    
	
	
    function fotos($id, $adata){
		    $sss = $this->db->query('select * from imoveis_acompanhamento_stats where idimovel = '.$id.' and data="'.$adata.'"');
            $data['ultimas'] = $sss->result();
         	$this->load->view('fotos', $data);
	}
    
	
	
	
	
    function clicks($imovel) {
       
        /* Conta e atualiza os clicks nos imóveis */
        $this->db->where('idimoveis', $imovel);
        $busca = $this->db->get('imoveis')->result();
        //quantidade de cliques
        $cliques = $busca[0]->clicks;
        //adiciona um clique
        
        $data['clicks'] = $cliques + 1;
        $this->db->where('idimoveis', $imovel);
        $this->db->update('imoveis', $data);
        return;
    }
    
    
    /* funções da busca */
    
        function getbairros($cidade=null){
       /* 
        * Se estado == null ele apenas lista.
        * Se estado tiver preenchido, ele busca as cidades daquele estado.
        */
        
        if ($cidade == 0){
			/*Nao selecionou cidade, busca tudo (todos os bairros)*/
			$busca = $this->db->query('SELECT * FROM bairros ORDER BY bairro ASC');
        
        } 
		if ($cidade > 0) {
			$busca = $this->db->query('SELECT * FROM bairros WHERE idcidade = '.$cidade.' ORDER BY bairro ASC');
		}
		
		if ($cidade == null ){
		
		    $busca = $this->db->query('SELECT * FROM bairros ORDER BY bairro ASC');
		}
		
			
		
        $query = $busca->result();
            echo "<option>Selecione</option>";
			echo "<option value='0'>Todos</option>";
        foreach ($query as $q):
            echo "<option value='".$q->idbairro."'>".$q->bairro."</option>";
        endforeach;
    }
    
       function gettipos($bairro=null){
       /* 
        * Se estado == null ele apenas lista.
        * Se estado tiver preenchido, ele busca as cidades daquele estado.
        */
       
        $query = $this->db->get('imoveis_tipo')->result();
            echo "<option>Selecione</option>";
			#echo "<option value='0'>Todos</option>";
        foreach ($query as $q):
            echo "<option value='".$q->idtipo."'>".$q->tipo."</option>";
        endforeach;
    }
    
      function getempr($tipo=null){
       /* 
        * Se estado == null ele apenas lista.
        * Se estado tiver preenchido, ele busca as cidades daquele estado.
        */
        
        if ($tipo != null){
            $this->db->where('tipo', $tipo);
        }
        $query = $this->db->get('imoveis')->result();
            echo "<option>Selecione</option>";
		    #echo "<option value='0'>Todos</option>";
        foreach ($query as $q):
            echo "<option value='".$q->idimoveis."'>".$q->nome."</option>";
        endforeach;
    }
    
    
    function busca(){
       
        /* recebe o parâmetro e abre o imóvel selecionado */
        $cidade = $this->input->post('bcidade');
		$bairro = $this->input->post('bbairro');
        $tipo   = $this->input->post('btipo');
    
	

	
	    $data['titulo'] = "JWL Negócios Imobiliários | Imóveis - Busca";
        $data['tit']    = "Busca de Imóveis";
       
	
	   	$sql = "select imoveis_tipo.tipo as tipoimovel, 
					  imoveis.*
					  from imoveis
					  left join imoveis_tipo 
					  on (imoveis_tipo.idtipo = imoveis.tipo)";
			
			if ($cidade != null && $cidade != 0) {
				$sql .= " where ";
			}
		 
		    if ($cidade != 0) {
		    $sql .= " cidade = " . $cidade . " ";
			}
			
			if ($bairro != null && $bairro != 0) {
				$sql .= " and ";
			}
			
			if ($bairro != 0  ) {
		    $sql .= "bairro = " . $bairro . " ";
			}
			
			if ($tipo != null) {
				if ($cidade == null || $cidade == 0) {
					$sql .= " where ";
				} else {
					$sql .= " and ";
				}
				
				$sql .= " imoveis_tipo.idtipo = " . $tipo;
				
			}
			
			$sql .= " order by imoveis.idimoveis desc            ";
 	 
	 		   /* Puxando todos os imoveis do banco de dados */
		  $query = $this->db->query($sql);
          $data['imoveis'] = $query->result();
				

       
        
		   $this->load->view('elementos/header', $data);
		   $this->load->view('elementos/topo');
		   //$this->load->view('elementos/banners-interno', $data);
		   $this->load->view('imoveis', $data);
		   $this->load->view('elementos/footer');
		
		
	}
    
	
	    
    function buscAvancada(){
       
        /* recebe o parâmetro e abre o imóvel selecionado */
        $cidade = $this->session->userdata('bcidade');
		$bairro = $this->session->userdata('bbairro');
        $tipo   = $this->input->post('btipos');
    
	
echo "<p> cidade </p>";
echo "<pre>"; print_r($cidade); echo "</pre>";
echo "<br /><br />";
echo "<p> bairro </p>";
echo "<pre>"; print_r($bairro); echo "</pre>";
echo "<br /><br />";
echo "<p> tipos </p>";
echo "<pre>"; print_r($tipo); echo "</pre>";
echo "<br /><br />";

die('end');
	
	    $data['titulo'] = "JWL Negócios Imobiliários | Imóveis - Busca";
        $data['tit']    = "Busca de Imóveis";
       
	
	   	$sql = "select imoveis_tipo.tipo as tipoimovel, 
					  imoveis.*
					  from imoveis
					  left join imoveis_tipo 
					  on (imoveis_tipo.idtipo = imoveis.tipo)";
			
			if ($cidade != null && $cidade != 0) {
				$sql .= " where ";
			}
		 
		    if ($cidade != 0) {
		    $sql .= " cidade = " . $cidade . " ";
			}
			
			if ($bairro != null && $bairro != 0) {
				$sql .= " and ";
			}
			
			if ($bairro != 0  ) {
		    $sql .= "bairro = " . $bairro . " ";
			}
			
			if ($tipo != null) {
				if ($cidade == null || $cidade == 0) {
					$sql .= " where ";
				} else {
					$sql .= " and ";
				}
				
				$sql .= " imoveis_tipo.idtipo = " . $tipo;
				
			}
			
			$sql .= " order by imoveis.idimoveis desc            ";
 	 
	 		   /* Puxando todos os imoveis do banco de dados */
		  $query = $this->db->query($sql);
          $data['imoveis'] = $query->result();
				

       
        
		   $this->load->view('elementos/header', $data);
		   $this->load->view('elementos/topo');
		   //$this->load->view('elementos/banners-interno', $data);
		   $this->load->view('imoveis', $data);
		   $this->load->view('elementos/footer');
		
		
	}
    
	
	
	/* teste para buscar cidade (jeito novo)*/
	function buscaCidade(){
			$query = $this->db->query('SELECT * FROM cidades ORDER BY cidade ASC');	
			$data['cidades'] = $query->result();
		    $this->load->view('buscarCidade', $data);
		  
		   
		   
			
	}
	
	function processaCidade(){
		    /*  Grava as cidades escolhidas na session */
			$cidades = $this->input->post('cidadess');
			
			if (!empty($cidades)){
				$this->session->set_userdata('bcidade', $cidades);

			}
			
			$this->buscarBairros();
			
			
	}
	

	
	function buscarBairros(){
		
		//echo "<pre>" ; print_r($_SESSION['bcidade']); echo "</pre>";
		
		    $busca = '';
			$bcity = $this->session->userdata('bcidade');
			if (!empty($bcity)) {
				
				$p = $bcity;
				for ($i=0 ; $i<count($p) ; $i++) {
					if ($i>0) {
						$busca .= " OR";
					}
					$busca .=  " idcidade =" . $p[$i] . " ";
				}
		
			$query = $this->db->query('SELECT * FROM bairros WHERE '.$busca.' ORDER BY idcidade,bairro ASC');	
			$data['bairros'] = $query->result();
		
		 	$this->load->view('buscarBairros', $data);
		}
		
	}
	
	function processaBairro() {
	
				/*  Grava as cidades escolhidas na session */
				$bairros = $this->input->post('bairross');
				if (!empty($cidades)){
					$this->session->set_userdata('bbairo', $bairros);
				}
				$this->buscarTipos();
			}
			

		function buscarTipos(){
		
		//echo "<pre>" ; print_r($_SESSION['bcidade']); echo "</pre>";
		
		    $query = $this->db->query('SELECT * FROM imoveis_tipo WHERE tipo <> 5 ORDER BY tipo');	
			$data['tipos'] = $query->result();
		 	$this->load->view('buscarTipos', $data);
		}
    
}

?>
