<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Editorias_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function insere($data){
        return $this->db->insert('estatico', $data);
    }
    
    function altera($data){
        $this->db->where('id', $data['id']);
        return $this->db->update('estatico', $data); 
    }
    
    function deleta($id){
        $this->db->where('id', $id);
        return $this->db->delete('estatico');
       
    }
    
    function listaPorSecao($secao){
       $this->db->order_by('id', 'desc');
       $this->db->where('idsecao', $secao);
       $query = $this->db->get('estatico');
       return $query->result();
    }
    
    function listaSecoes() {
       $this->db->order_by('id', 'desc');
       $this->db->where('pertencea', '0');
       $query = $this->db->get('estatico');
       return $query->result();
    }
    
    function listaTudo($id) {
       $this->db->where('idsecao', $id);
       $this->db->order_by('id', 'desc');
       $query = $this->db->get('estatico');
       return $query->result();
    }
    
    function listaId($id) {
       $this->db->where('id', $id);
       $query = $this->db->get('estatico');
       return $query->result();
    }
    
    function principais() {
       $this->db->where('pertencea', '0');
       $this->db->order_by('id', 'desc');
       $query = $this->db->get('estatico');
       return $query->result();
       
    }
    function submenus($id) {
       $this->db->where('pertencea', $id);
       $query = $this->db->get('estatico');
       return $query->result();
    }

}

?>
