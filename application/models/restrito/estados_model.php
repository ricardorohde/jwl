<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Estados_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('estados', $data);
    }

    function listar() {
        $this->db->select('estados.*');
        $this->db->from('estados');
        $this->db->order_by('estado', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idestado', $id);
        $query = $this->db->get('estados');
        return $query->result();
    }

    function altera($data) {
        $this->db->where('idestado', $data['idestado']);
        return $this->db->update('estados', $data);
    }

    function deleta($id) {
        $this->db->where('idestado', $id);
        return $this->db->delete('estados');
    }

   

   
}

?>
