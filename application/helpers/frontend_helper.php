<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function topdez() {
    

    $ci = & get_instance();
    //Pega os itens do menu
    $ci->load->model('restrito/imoveis_model');
    $busca = $ci->imoveis_model->topdez();
      if ($busca == "") {
        return NULL;
    } else {
        return ($busca);
    }
}

function todosImoveis(){
   $ci = & get_instance();
    //Pega os itens do menu
    $ci->load->model('restrito/imoveis_model');
    $busca = $ci->imoveis_model->listarEmConstrucao();
      if ($busca == "") {
        return NULL;
    } else {
        return ($busca);
    }
    
}

function city(){
   /*Recupera todas as cidades para a view*/
    $ci = & get_instance();
    //Pega os itens do menu
    $ci->db->order_by('cidade','asc');
    $retorn = $ci->db->get('cidades');
    return $retorn->result();
}
function bairr(){
   /*Recupera todas as cidades para a view*/
    $ci = & get_instance();
    //Pega os itens do menu
    $ci->db->order_by('bairro','asc');
    $retorn = $ci->db->get('bairros');
    return $retorn->result();
}
function tips(){
    /* retorna os tipos de imóveis existentes*/
    $ci = & get_instance();
    //Pega os itens do menu
    $ci->db->order_by('tipo','asc');
    $retorn = $ci->db->get('imoveis_tipo');
    return $retorn->result();
}

function checaRegistro($table, $id) {
	
	    $ci = & get_instance();
 		
		$ci->db->where('idimovel', $id);   
		$busca = $ci->db->get($table);
		$retorn = $busca->result();


    
	  if (count($retorn) > 0) {
        return true;
    } else {
        return false;
    }
	
}
    



