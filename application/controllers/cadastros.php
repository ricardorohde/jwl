<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cadastros extends CI_Controller {

    function __construct() {
        parent::__construct();
        
    }

    

    function cadastros() {
     
    }
    
    function ligamos(){
       
        /* responsável pelo cadastro do "Ligamos para você */
        $data['nome'] = $this->input->post('cnome');
        $data['email'] = $this->input->post('cemail');
        $data['telefone'] = $this->input->post('ctel');
        $data['celular'] = $this->input->post('ccel');
        $data['melhordiacontato'] = $this->input->post('chora');
        $data['melhorhorario'] = $this->input->post('cdata');
        $data['comentario'] = $this->input->post('coments');
        $data['secao'] = 'Ligamos para você';
        $data['acesso'] = date('Y-m-d H:m:s');
        $data['informativo'] = $this->input->post('novidades');
        /* uso do operador ternário para quando o cliente não marcar que deseja news ter o valor correto atribuido 'n'*/
        
        if ($this->grava($data) == true) {
            
            redirect(base_url() . 'clientes/ligamos');
        }
        
    }
    
        function visitas(){
       
        /* responsável pelo cadastro do "Ligamos para você */
        $data['nome'] = $this->input->post('cnome');
        $data['email'] = $this->input->post('cemail');
        $data['telefone'] = $this->input->post('ctel');
        $data['celular'] = $this->input->post('ccel');
        $data['melhordiacontato'] = $this->input->post('chora');
        $data['melhorhorario'] = $this->input->post('cdata');
        $data['comentario'] = $this->input->post('coments');
        $data['secao'] = 'Agende sua visita';
        $data['acesso'] = date('Y-m-d H:m:s');
        $data['informativo'] = $this->input->post('novidades');
        /* uso do operador ternário para quando o cliente não marcar que deseja news ter o valor correto atribuido 'n'*/
        
        if ($this->grava($data) == true) {
            redirect(base_url() . 'clientes/visitas');
        }
        
    }
    
     function assistencia(){
       
        /* responsável pelo cadastro do "Ligamos para você */
        $data['nome'] = $this->input->post('cnome');
        $data['email'] = $this->input->post('cemail');
        $data['telefone'] = $this->input->post('ctel');
        $data['celular'] = $this->input->post('ccel');
        $data['empreendimento'] = $this->input->post('cempreend');
        $data['apto'] = $this->input->post('capto');
        $data['comentario'] = $this->input->post('coments');
        $data['secao'] = 'Assistência Técnica';
        $data['acesso'] = date('Y-m-d H:m:s');
        $data['informativo'] = $this->input->post('novidades');
        /* uso do operador ternário para quando o cliente não marcar que deseja news ter o valor correto atribuido 'n'*/
        
        if ($this->grava($data) == true) {
            redirect(base_url() . 'clientes/assistencia');
        }
        
    }
    
    
     function atendimento(){
       
        /* responsável pelo cadastro do "Ligamos para você */
        $data['nome'] = $this->input->post('cnome');
        $data['email'] = $this->input->post('cemail');
        $data['telefone'] = $this->input->post('ctel');
        $data['celular'] = $this->input->post('ccel');
        $data['depto'] = $this->input->post('cdepto');
        $data['comentario'] = $this->input->post('coments');
        $data['secao'] = 'Atendimento ao Cliente';
        $data['acesso'] = date('Y-m-d H:m:s');
        
        /* uso do operador ternário para quando o cliente não marcar que deseja news ter o valor correto atribuido 'n'*/
        
        if ($this->grava($data) == true) {
            redirect(base_url() . 'clientes/atendimento');
        }
        
    }
    
    
    
    public function grava($dados){
       
        if ($this->db->insert('cadastro', $dados)) {
            return true;
        } else {
            return false;
        }
        
    }
  
    

}

?>
