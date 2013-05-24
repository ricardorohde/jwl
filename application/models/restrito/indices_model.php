<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Indices_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('indices', $data);
    }

    function listar() {
        $this->db->select('indices.*');
        $this->db->from('indices');
        $this->db->order_by('ano,mes', 'asc,desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function anos(){
       $query = $this->db->query('SELECT id,ano FROM indices GROUP BY ano ORDER BY ano DESC');
       return $query->result();
       
    }
    
     function listarAno($ano) {
        $this->db->where('ano', $ano);
        $this->db->order_by('mes', 'asc');
        $query = $this->db->get('indices');        
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('indices');
        return $query->result();
    }

    function altera($data) {
        $this->db->where('id', $data['id']);
        return $this->db->update('indices', $data);
    }

    function deletames($id) {
        $this->db->where('id', $id);
        return $this->db->delete('indices');
    }
    
    function deletano($ano) {
        $this->db->where('ano', $ano);
        return $this->db->delete('indices');
    }

   

   
}

?>
