<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bairros_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insere($data) {
        return $this->db->insert('bairros', $data);
    }

    function listar() {
        
        $query = $this->db->query('select 
                                 cidades.*,
                                 bairros.* 
                                 from bairros
                                 left join cidades ON (cidades.idcidade = bairros.idcidade)
                                 order by bairros.bairro ASC 
                                ');
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idbairro', $id);
        $query = $this->db->get('bairros');
        return $query->result();
    }

    function altera($data) {
        $this->db->where('idbairro', $data['idbairro']);
        return $this->db->update('bairros', $data);
    }

    function deleta($id) {
        $this->db->where('idbairro', $id);
        return $this->db->delete('bairros');
    }

   

   
}

?>
