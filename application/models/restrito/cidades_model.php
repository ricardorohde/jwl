<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cidades_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('cidades', $data);
    }

    function listar() {
        
        $query = $this->db->query('select 
                                 estados.*,
                                 cidades.* 
                                 from cidades
                                 left join estados ON (estados.idestado = cidades.iduf)
                                 order by cidades.cidade ASC 
                                ');
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idcidade', $id);
        $query = $this->db->get('cidades');
        return $query->result();
    }

    function altera($data) {
        $this->db->where('idcidade', $data['idcidade']);
        return $this->db->update('cidades', $data);
    }

    function deleta($id) {
        $this->db->where('idcidade', $id);
        return $this->db->delete('cidades');
    }

   

   
}

?>
