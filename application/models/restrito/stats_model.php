<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stats_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('stats', $data);
    }

    function listar() {
        $this->db->select('stats.*');
        $this->db->from('stats');
        $this->db->order_by('id_stats', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function detalhes($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('stats');
        return $query->result();
    }
  
    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('stats');
    }


}

?>
