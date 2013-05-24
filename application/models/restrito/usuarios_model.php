<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('users', $data);
    }

    function listar() {
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->order_by('username', 'asc');
        $query = $this->db->get();
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idusers', $id);
        $query = $this->db->get('users');
        return $query->result();
    }

    function alterar($data) {
        $this->db->where('idusers', $data['idusers']);
        return $this->db->update('users', $data);
    }

    function deletar($id) {
        $this->db->where('idusers', $id);
        return $this->db->delete('users');
    }

    function login($data) {
        $this->db->where('login', $data['login']);
        $this->db->where('senha', $data['senha']);
        $query = $this->db->get('users');
        return $query->result();
    }

    function check($str) {
        $this->db->where('login', $str['login']);
        $this->db->or_where('username', $str['usuario']);
        $this->db->or_where('email', $str['email']);
        $query = $this->db->get('users');
        return $query->num_rows();
    }
    
    function check_mail($email){
        $this->db->where('email', $email);
        $q = $this->db->get('users');
        return $q->result();
    }

}

?>
