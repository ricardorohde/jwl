<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Noticias_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('noticias', $data);
    }

    function listar() {
        $this->db->select('noticias.*');
        $this->db->from('noticias');
        $this->db->order_by('idnoticias', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idnoticias', $id);
        $query = $this->db->get('noticias');
        return $query->result();
    }

    function altera($data) {
        $this->db->where('idnoticias', $data['idnoticias']);
        return $this->db->update('noticias', $data);
    }

    function deleta($id) {
        $this->db->where('idnoticias', $id);
        return $this->db->delete('noticias');
    }

   

   
}

?>
