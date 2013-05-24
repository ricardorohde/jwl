<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Banners_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('banners', $data);
    }

    function listar() {
        $this->db->select('banners.*');
        $this->db->from('banners');
        $this->db->order_by('idbanner', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
	
	 function listarAtivos() {
        $this->db->select('banners.*');
        $this->db->from('banners');
		$this->db->where('ativo','s');
        $this->db->order_by('idbanner', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idbanner', $id);
        $query = $this->db->get('banners');
        return $query->result();
    }

    function altera($data) {
        $this->db->where('idbanner', $data['idbanner']);
        return $this->db->update('banners', $data);
    }

    function deleta($id) {
        $this->db->where('idbanner', $id);
        return $this->db->delete('banners');
    }

   

   
}

?>
