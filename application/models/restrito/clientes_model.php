<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('cadastro', $data);
    }

    function listar() {
        $this->db->select('cadastro.*');
        $this->db->from('cadastro');
        $this->db->order_by('username', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function listarTudo($ordem, $like=null) {
        
        $this->db->select('cadastro.*');
        $this->db->from('cadastro');
        if ($like != '') {
        $this->db->like('secao', $like); 
        }
        $this->db->order_by($ordem, 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('cadastro');
        return $query->result();
    }

    function alterar($data) {
        $this->db->where('id', $data['id']);
        return $this->db->update('cadastro', $data);
    }

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('cadastro');
    }

    function login($data) {
        $this->db->where('login', $data['login']);
        $this->db->where('senha', $data['senha']);
        $query = $this->db->get('cadastro');
        return $query->result();
    }

    function check($str) {
        $this->db->where('login', $str['login']);
        $this->db->or_where('username', $str['usuario']);
        $this->db->or_where('email', $str['email']);
        $query = $this->db->get('cadastro');
        return $query->num_rows();
    }
    
    function check_mail($email){
        $this->db->where('email', $email);
        $q = $this->db->get('cadastro');
        return $q->result();
    }

}

?>
