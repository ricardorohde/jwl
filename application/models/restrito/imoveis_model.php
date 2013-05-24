<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imoveis_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }

    function insere($data) {
        return $this->db->insert('imoveis', $data);
    }

    function listar() {
     
        $query = $this->db->query('select imoveis_tipo.tipo as tipoimovel, 
                                   imoveis.* from imoveis left join imoveis_tipo 
									on (imoveis_tipo.idtipo = imoveis.tipo)
                                    order by idimoveis desc');						
		
        return $query->result();
    }
    
    
    
     function listarEmConstrucao() {
        $this->db->select('imoveis.*');
        $this->db->from('imoveis');
        $this->db->where('tipo =','2');
        $this->db->order_by('idimoveis', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
      function listarConcluidos() {
       /* $this->db->select('imoveis.*');
        $this->db->from('imoveis');
        $this->db->where('tipo','5');
        $this->db->order_by('idimoveis', 'desc');
        $query = $this->db->get();
        return $query->result();*/
		
		$query = $this->db->query('select * from imoveis where tipo = "5" ORDER BY conclusao_ano DESC, conclusao_mes ASC');
        return $query->result();

		
		
		
    }
    
     function listarDestaques() {
        $this->db->select('imoveis.*');
        $this->db->from('imoveis');
        $this->db->where('destaque <>','n');
        $this->db->order_by('idimoveis', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
    
  
    
     function topdez() {
        $this->db->order_by('clicks', 'desc');
        $query = $this->db->get('imoveis');
        return $query->result();
    }
    
    function registro($id) {
        $this->db->where('idimoveis', $id);
        $query = $this->db->get('imoveis');
        return $query->result();
    }
    
     function listarPorTipo($tipo) {
        $this->db->where('tipo', $tipo);
        $query = $this->db->get('imoveis');
        return $query->result();
    }
    
    function nomeImovel($id) {
        $this->db->where('idimoveis', $id);
        $query = $this->db->get('imoveis');
        $p = $query->result();
        return $p[0]->nome;
    }

    function altera($data) {
        $this->db->where('idimoveis', $data['idimoveis']);
        return $this->db->update('imoveis', $data);
    }

    function deleta($id) {
        $this->db->where('idimoveis', $id);
        return $this->db->delete('imoveis');
    }
    
    /* funções diversas */
    function getPlantas($id) {
        
        $this->db->where('idimovel', $id);
        $busca = $this->db->get('imoveis_plantas');
        return $busca->result();
       
    }
    
     function getPerp($id) {
        
        $this->db->where('idimovel', $id);
        $busca = $this->db->get('imoveis_perspectiva');
        return $busca->result();
       
    }
    
     function getLazer($id) {
        
        $this->db->where('idimovel', $id);
        $busca = $this->db->get('imoveis_servicos');
        return $busca->result();
       
    }
    
    function getVideos($id) {
        
        $this->db->where('idimovel', $id);
        $busca = $this->db->get('imoveis_videos');
        return $busca->result();
       
    }

   function getImovel($acompanhamento) {
       $query = $this->db->query('SELECT imoveis_acompanhamento.*,
                                         imoveis.* 
                                         from imoveis_acompanhamento
                                         LEFT JOIN imoveis
                                         ON (imoveis_acompanhamento.idimovel = imoveis.idimoveis)
                                         WHERE imoveis_acompanhamento.idacompanhamento = '. $acompanhamento . '');
       return $query->result();
   }

   
}

?>
