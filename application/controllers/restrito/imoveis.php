<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imoveis extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('restrito/imoveis_model');
        
          /*Bloqueando a home para usuários não logados */
        $this->load->library('session');
        if (!$this->session->userdata('loggedin')) {
            $this->session->set_flashdata('alerta','É necessário estar logado para entrar!!');
            redirect(base_url() . 'restrito/home/logon', 'refresh');
        }
        /* codigo de bloqueio end.*/
    }

    function index() {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        //query tipos de imovel
        $x = $this->db->get('imoveis_tipo');
        $data['tiposimoveis'] = $x->result();

        $data['imoveis'] = $this->imoveis_model->listar();

        /* Chama o ck editor */
        $this->load->helper('ckeditor');
        $data['ckeditor_descricao'] = array(
            'id' => 'descricao',
            'path' => 'assets/js/ckeditor',
            'config' => array(
                'toolbar' => 'Full',
                'width' => '95%',
                'height' => '450px',
                'filebrowserBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            )
        );

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function add() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['nome'] 			= $this->input->post('nome');
        $data['tipo']			= $this->input->post('tipo');
		$data['tipo_imovel'] 	= $this->input->post('tipo_imovel');
		$data['qtd_quarto'] 	= $this->input->post('qtd_quarto');
		$data['qtd_suite']		= $this->input->post('qtd_suite');
		$data['qtd_garagem'] 	= $this->input->post('qtd_garagem');
		$data['qtd_torre'] 		= $this->input->post('qtd_torre');
		$data['complementos'] 	= $this->input->post('complementos');
		$data['tamanho_area'] 	= $this->input->post('tamanho_area');
		$data['fotocapa'] 		= $this->input->post('fotocapa');
		$data['datacad'] 		= date('Y-m-d H:m:s');
		
		
		
		
        //$data['descricao'] = $this->input->post('descricao'); 
        //$data['minidescr'] = $this->input->post('minidescr');
        

        if ($this->imoveis_model->insere($data)) {
			
			
			/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Inseriu imóvel";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Inserir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Imovel: '.$data['nome'];
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
			$pSQL = $this->db->query('SELECT idimoveis FROM imoveis WHERE nome = "'.$data['nome'].'"');
			foreach ($pSQL->result_array() as $row){
			   $id_imovel = $row['idimoveis'];
			} 
			
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Imóvel criada com sucesso');
            redirect(base_url() . 'restrito/imoveis/localizacao/'.$id_imovel);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
            redirect(base_url() . 'restrito/imoveis');
        }
    }

    function alterar($id) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        //query tipos de imovel
        $x = $this->db->get('imoveis_tipo');
        $data['tiposimoveis'] = $x->result();

        $data['imoveis'] = $this->imoveis_model->registro($id);

        /* Chama o ck editor */
        $this->load->helper('ckeditor');
        $data['ckeditor_descricao'] = array(
            'id' => 'descricao',
            'path' => 'assets/js/ckeditor',
            'config' => array(
                'toolbar' => 'Full',
                'width' => '95%',
                'height' => '450px',
                'filebrowserBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            )
        );

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function alt() {
     // verifica se o nome do imovel foi alterado
	 $data['idimoveis'] 		= $this->input->post('idimoveis');
	 	$pSQL = $this->db->query('SELECT nome FROM imoveis WHERE idimoveis = '.$data['idimoveis']);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['nome'];
		}   
		$data['nome'] 			= $this->input->post('nome');
        
        $data['tipo']			= $this->input->post('tipo');
		$data['tipo_imovel'] 	= $this->input->post('tipo_imovel');
		$data['qtd_quarto'] 	= $this->input->post('qtd_quarto');
		$data['qtd_suite']		= $this->input->post('qtd_suite');
		$data['qtd_garagem'] 	= $this->input->post('qtd_garagem');
		$data['qtd_torre'] 		= $this->input->post('qtd_torre');
		$data['complementos'] 	= $this->input->post('complementos');
		$data['tamanho_area'] 	= $this->input->post('tamanho_area');
		$data['fotocapa'] 		= $this->input->post('fotocapa');
		$data['datacad'] 		= date('Y-m-d H:m:s');

		/*
        $data['descricao'] = $this->input->post('descricao');
        $data['minidescr'] = $this->input->post('minidescr');
        */
		
		$xa = $this->input->post('conclusao_mes');
		$xu = $this->input->post('conclusao_ano');
		
		if (!empty($xa)) {
		        $data['conclusao_mes'] = $this->input->post('conclusao_mes');
		}
		if (!empty($xu)) {
		        $data['conclusao_ano'] = $this->input->post('conclusao_ano');
		}

        if ($this->imoveis_model->altera($data)) {
			
			/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Alterou imóvel";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Alterar';
				$status['user'] = $this->session->userdata('nome_usuario');
			if($aux == $data['nome']){
				$status['nome_stats_registro'] = 'Imovel: '.$aux;
			}else{
				$status['nome_stats_registro'] = 'Imovel: '.$aux.' foi aleterado para: '.$data['nome'];
			}
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Imóvel alterado com sucesso');
            redirect(base_url() . 'restrito/imoveis/alterar/'.$this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o Imóvel');
            redirect(base_url() . 'restrito/imoveis/alterar/'.$this->input->post('idimoveis'));
        }
    }
    
    function destacar($id,$destaque){
        
        if ($destaque == "s") {
           $data['destaque'] = 'n';
           $mens = "Destaque removido com sucesso";
        } else {
           $data['destaque'] = 's';
           $mens = "Imovel agora é destaque na Home";
        }
           $data['idimoveis'] = $id;
           
        if ($this->imoveis_model->altera($data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', $mens);
            redirect(base_url() . 'restrito/imoveis');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o Imóvel');
            redirect(base_url() . 'restrito/imoveis');
        }
        
    }

    function del($id) {
		$pSQL = $this->db->query('SELECT nome FROM imoveis WHERE idimoveis = '.$id);
		foreach ($pSQL->result_array() as $row){
		   $aux = $row['nome'];
		}

        if ($this->imoveis_model->deleta($id)) {
			
			/* Rotina de registro de atividades */
				$this->load->model('restrito/stats_model');
				
				$status['userid'] = $this->session->userdata('iduser');
				$status['action'] = "Deletou imóvel";
				$status['datahora'] = date('Y-m-d h:m:s');
				$status['ip'] = $_SERVER['REMOTE_ADDR'];
				$status['stats'] = 'Excluir';
				$status['user'] = $this->session->userdata('nome_usuario');
				$status['nome_stats_registro'] = 'Imovel: '.$aux;
				
				$this->stats_model->insere($status);
				
		/* Fim do bloco */
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Imovel removido com sucesso');
            redirect(base_url() . 'restrito/imoveis');
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o imovel');
            redirect(base_url() . 'restrito/imoveis');
        }
    }

    /*  Plantas  */

    function plantas($imovel) {

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($imovel);

        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->db->where('idimovel', $imovel);
        $sql = $this->db->get('imoveis_plantas');
        $data['plantas'] = $sql->result();
        $data['retorno'] = $imovel;

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_plantas', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function plantas_add() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['legenda'] = $this->input->post('legenda');
        $data['planta'] = $this->input->post('planta');
        $data['idimovel'] = $this->input->post('idimovel');

        if ($this->db->insert('imoveis_plantas', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Imóvel criada com sucesso');
            redirect(base_url() . 'restrito/imoveis/plantas/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
            redirect(base_url() . 'restrito/imoveis/plantas/' . $this->input->post('idimovel'));
        }
    }

    function plantas_alterar($planta) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";


        $this->db->where('idplanta', $planta);
        $sql = $this->db->get('imoveis_plantas');
        $data['planta'] = $sql->result();

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($data['planta'][0]->idimovel);


        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_plantas_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function plantas_alt() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['legenda'] = $this->input->post('legenda');
        $data['planta'] = $this->input->post('planta');
        $data['idimovel'] = $this->input->post('idimovel');
        $data['idplanta'] = $this->input->post('idplanta');

        $this->db->where('idplanta', $this->input->post('idplanta'));
        if ($this->db->update('imoveis_plantas', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Imóvel criada com sucesso');
            redirect(base_url() . 'restrito/imoveis/plantas/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
            redirect(base_url() . 'restrito/imoveis/plantas/' . $this->input->post('idimovel'));
        }
    }

    function plantas_del($id) {
        //descobre o id do imóvel referente à planta
        $this->db->where('idplanta', $id);
        $xuxa = $this->db->get('imoveis_plantas');
        $tchutchucao = $xuxa->result();
        $sasha = $tchutchucao[0]->idimovel;
        /*
         * Remove uma planta no banco de dados
         */
        $this->db->where('idplanta', $id);
        if ($this->db->delete('imoveis_plantas')) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Planta removido com sucesso');
            redirect(base_url() . 'restrito/imoveis/plantas/' . $sasha);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover a planta');
            redirect(base_url() . 'restrito/imoveis/plantas/' . $sasha);
        }
    }

    /* Perspectivas */

    function perspectivas($imovel) {

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($imovel);

        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->db->where('idimovel', $imovel);
        $sql = $this->db->get('imoveis_perspectiva');
        $data['perspectivas'] = $sql->result();
        $data['retorno'] = $imovel;

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_perspectivas', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function perspectivas_add() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['perspectiva'] = $this->input->post('perspectiva');
		$data['legenda'] = $this->input->post('legenda');
        $data['idimovel'] = $this->input->post('idimovel');

        if ($this->db->insert('imoveis_perspectiva', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro criado com sucesso');
            redirect(base_url() . 'restrito/imoveis/perspectivas/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o registro');
            redirect(base_url() . 'restrito/imoveis/perspectivas/' . $this->input->post('idimovel'));
        }
    }

    function perspectivas_alterar($persp) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";


        $this->db->where('idperspectiva', $persp);
        $sql = $this->db->get('imoveis_perspectiva');
        $data['perspectiva'] = $sql->result();

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($data['perspectiva'][0]->idimovel);


        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_perspectivas_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function perspectivas_alt() {
        /*
         * Adiciona um novo noticia no banco de dados
         */


        $data['perspectiva'] = $this->input->post('perspectiva');
		$data['legenda'] = $this->input->post('legenda');
        $data['idimovel'] = $this->input->post('idimovel');
        $data['idperspectiva'] = $this->input->post('idperspectiva');

        $this->db->where('idperspectiva', $this->input->post('idperspectiva'));
        if ($this->db->update('imoveis_perspectiva', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro criado com sucesso');
            redirect(base_url() . 'restrito/imoveis/perspectivas/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
            redirect(base_url() . 'restrito/imoveis/perspectivas/' . $this->input->post('idimovel'));
        }
    }

    function perspectivas_del($id) {
        //descobre o id do imóvel referente à perspectiva
        $this->db->where('idperspectiva', $id);
        $xuxa = $this->db->get('imoveis_perspectiva');
        $tchutchucao = $xuxa->result();
        $sasha = $tchutchucao[0]->idimovel;
        /*
         * Remove uma planta no banco de dados
         */
        $this->db->where('idperspectiva', $id);
        if ($this->db->delete('imoveis_perspectiva')) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro removido com sucesso');
            redirect(base_url() . 'restrito/imoveis/perspectivas/' . $sasha);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o registro');
            redirect(base_url() . 'restrito/imoveis/perspectivas/' . $sasha);
        }
    }

    /*    Lazer e Serviços */

    function servicos($imovel) {

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($imovel);

        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->db->where('idimovel', $imovel);
        $sql = $this->db->get('imoveis_servicos');
        $data['servicos'] = $sql->result();
        $data['retorno'] = $imovel;

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_servicos', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function servicos_add() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['servico'] = $this->input->post('servico');
        $data['imagem'] = $this->input->post('imagem');
        $data['idimovel'] = $this->input->post('idimovel');

        if ($this->db->insert('imoveis_servicos', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Imóvel criada com sucesso');
            redirect(base_url() . 'restrito/imoveis/servicos/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
            redirect(base_url() . 'restrito/imoveis/servicos/' . $this->input->post('idimovel'));
        }
    }

    function servicos_alterar($planta) {
        $data['titulo'] = "Sistema Administrativo - Área Restrita";


        $this->db->where('idservico', $planta);
        $sql = $this->db->get('imoveis_servicos');
        $data['servico'] = $sql->result();

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($data['servico'][0]->idimovel);


        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_servicos_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function servicos_alt() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['servico'] = $this->input->post('servico');
        $data['imagem'] = $this->input->post('imagem');
        $data['idimovel'] = $this->input->post('idimovel');
        $data['idservico'] = $this->input->post('idservico');

        $this->db->where('idservico', $this->input->post('idservico'));
        if ($this->db->update('imoveis_servicos', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro criado com sucesso');
            redirect(base_url() . 'restrito/imoveis/servicos/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o Registro');
            redirect(base_url() . 'restrito/imoveis/servicos/' . $this->input->post('idimovel'));
        }
    }

    function servicos_del($id) {
        //descobre o id do imóvel referente à planta
        $this->db->where('idservico', $id);
        $xuxa = $this->db->get('imoveis_servicos');
        $tchutchucao = $xuxa->result();
        $sasha = $tchutchucao[0]->idimovel;
        /*
         * Remove uma planta no banco de dados
         */
        $this->db->where('idservico', $id);
        if ($this->db->delete('imoveis_servicos')) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro removido com sucesso');
            redirect(base_url() . 'restrito/imoveis/servicos/' . $sasha);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o Registro');
            redirect(base_url() . 'restrito/imoveis/servicos/' . $sasha);
        }
    }

    function localizacao($planta) {
        // Localização é alteração direta, não existe input.
        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->load->model('restrito/estados_model');
        $data['uf'] = $this->estados_model->listar();
        
        $this->load->model('restrito/cidades_model');
        $data['city'] = $this->cidades_model->listar();
        
        $this->load->model('restrito/bairros_model');
        $data['bairro'] = $this->bairros_model->listar();
        
        
        $data['localizacao'] = $this->imoveis_model->registro($planta);
        
        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_localizacao', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function localizacao_alt() {
        // edita o codigo do googlemaps para aparecer o mapa
		$edit_script_mapa = $this->input->post('googlemaps');			
			$scriptnew = explode("</iframe>", $edit_script_mapa);
			$map_pronto = explode(" ",$scriptnew[0]);

        $data['estado'] = $this->input->post('estado');
        $data['cidade'] = $this->input->post('cidade');
        $data['bairro'] = $this->input->post('bairro');
        $data['localizacao'] = $this->input->post('localizacao');
		if($scriptnew[0] == ''){
        	$data['googlemaps'] = '';
		}else{
			$data['googlemaps'] = $scriptnew[0].'</iframe>';
		}
        $data['idimoveis'] = $this->input->post('idimoveis');

        if ($this->imoveis_model->altera($data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Localizacao alterada com sucesso');
            redirect(base_url() . 'restrito/imoveis/localizacao/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar alterar a localizacao');
            redirect(base_url() . 'restrito/imoveis/localizacao/' . $this->input->post('idimoveis'));
        }
    }

    /* realização */

    function realizacao($id) {
        // Localização é alteração direta, não existe input.
        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $data['realizacao'] = $this->imoveis_model->registro($id);
        $this->load->helper('ckeditor');
        $data['ckeditor_descricao'] = array(
            'id' => 'realizacao',
            'path' => 'assets/js/ckeditor',
            'config' => array(
                'toolbar' => 'Full',
                'width' => '95%',
                'height' => '450px',
                'filebrowserBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html',
                'filebrowserImageBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Images',
                'filebrowserFlashBrowseUrl' => base_url() . 'assets/js/ckfinder/ckfinder.html?Type=Flash',
                'filebrowserUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                'filebrowserImageUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                'filebrowserFlashUploadUrl' => base_url() . 'assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            )
        );

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_realizacao', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function realizacao_alt() {
        /*
         * Adiciona um novo noticia no banco de dados
         */


        $data['realizacao'] = $this->input->post('realizacao');
        $data['idimoveis'] = $this->input->post('idimoveis');

        if ($this->imoveis_model->altera($data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro criado com sucesso');
            redirect(base_url() . 'restrito/imoveis/realizacao/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o Registro');
            redirect(base_url() . 'restrito/imoveis/realizacao/' . $this->input->post('idimoveis'));
        }
    }

    /* end realização */

    /* Valores */

    function valores($planta) {
        // Localização é alteração direta, não existe input.
        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $data['valores'] = $this->imoveis_model->registro($planta);

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_valores', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function valores_alt() {
        /*
         * Adiciona um novo noticia no banco de dados
         */
		
		$data['banner_valor'] = $this->input->post('banner_valor');
		$data['txt_valor'] = $this->input->post('txt_valor');
        $data['valores'] = $this->input->post('valores');
        $data['idimoveis'] = $this->input->post('idimoveis');

        if ($this->imoveis_model->altera($data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Valor alterado com sucesso');
            redirect(base_url() . 'restrito/imoveis/valores/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar alterar o valor');
            redirect(base_url() . 'restrito/imoveis/valores/' . $this->input->post('idimoveis'));
        }
    }

    /* Acesse */

    function sites($planta) {
        //Localiza o campo Acesse na tabela imoveis
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
        $data['valores'] = $this->imoveis_model->registro($planta);

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_acesse', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function sites_alt() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['acesse'] = $this->input->post('acesse');
        $data['idimoveis'] = $this->input->post('idimoveis');

        if ($this->imoveis_model->altera($data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Link do site alteradp com sucesso');
            redirect(base_url() . 'restrito/imoveis/sites/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar alterar o link do site');
            redirect(base_url() . 'restrito/imoveis/sites/' . $this->input->post('idimoveis'));
        }
    }

    function videos($imovel) {

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($imovel);

        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->db->where('idimovel', $imovel);
        $sql = $this->db->get('imoveis_videos');
        $data['videos'] = $sql->result();
        $data['retorno'] = $imovel;

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_videos', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function videos_add() {
        /*
         * Adiciona um novo noticia no banco de dados
         */

        $data['idimovel'] = $this->input->post('idimovel');
        $data['linkvideo'] = youtubeVideo($this->input->post('linkvideo'));
		$data['legenda'] = $this->input->post('legenda');


        if ($this->db->insert('imoveis_videos', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Video alterado com sucesso');
            redirect(base_url() . 'restrito/imoveis/videos/' . $this->input->post('idimovel'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar alterar o Video');
            redirect(base_url() . 'restrito/imoveis/videos/' . $this->input->post('idimovel'));
        }
    }

    function videos_del($id) {
        //descobre o id do imóvel referente à planta
        $this->db->where('idvideos', $id);
        $xuxa = $this->db->get('imoveis_videos');
        $tchutchucao = $xuxa->result();
        $sasha = $tchutchucao[0]->idimovel;
        /*
         * Remove uma planta no banco de dados
         */
        $this->db->where('idvideos', $id);
        if ($this->db->delete('imoveis_videos')) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Video removido com sucesso');
            redirect(base_url() . 'restrito/imoveis/videos/' . $sasha);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o video');
            redirect(base_url() . 'restrito/imoveis/videos/' . $sasha);
        }
    }

    function acompanhamento($id) {
        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($id);

        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->db->where('idimovel', $id);
        $sql = $this->db->get('imoveis_acompanhamento');
        $data['acompanhamentos'] = $sql->result();
        $data['retorno'] = $id;

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_acompanhamento', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function acompanhamentos_alterar($id) {


        $data['titulo'] = "Sistema Administrativo - Área Restrita";

        $this->db->where('idacompanhamento', $id);
        $sql = $this->db->get('imoveis_acompanhamento');
        $data['acompanhamentos'] = $sql->result();
        $data['retorno'] = $data['acompanhamentos'][0]->idimovel;

        $data['nomeimovel'] = $this->imoveis_model->nomeImovel($data['acompanhamentos'][0]->idimovel);

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_acompanhamento_alt', $data);
        $this->load->view('restrito/elementos/footer', $data);
    }

    function acompanhamentos_add() {

        $data['porc'] = $this->input->post('porc');
        $data['item'] = $this->input->post('item');
        $data['ordem'] = $this->input->post('ordem');
        $data['idimovel'] = $this->input->post('idimoveis');


        if ($this->db->insert('imoveis_acompanhamento', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Índice criado com sucesso');
            redirect(base_url() . 'restrito/imoveis/acompanhamento/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
            redirect(base_url() . 'restrito/imoveis/acompanhamento/' . $this->input->post('idimoveis'));
        }
    }

    function acompanhamentos_alt() {

        $data['idacompanhamento'] = $this->input->post('idacompanhamento');
        $data['porc'] = $this->input->post('porc');
        $data['item'] = $this->input->post('item');
        $data['ordem'] = $this->input->post('ordem');
        $data['idimovel'] = $this->input->post('idimoveis');

        $this->db->where('idacompanhamento', $data['idacompanhamento']);
        if ($this->db->update('imoveis_acompanhamento', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Índice modificado com sucesso');
            redirect(base_url() . 'restrito/imoveis/acompanhamento/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o indice');
            redirect(base_url() . 'restrito/imoveis/acompanhamento/' . $this->input->post('idimoveis'));
        }
    }

    function acompanhamentos_del($idacompanhamento) {
        //descobre o id do imóvel referente à planta
        $this->db->where('idacompanhamento', $idacompanhamento);
        $xuxa = $this->db->get('imoveis_acompanhamento');
        $tchutchucao = $xuxa->result();
        $sasha = $tchutchucao[0]->idimovel;
        /*
         * Remove uma planta no banco de dados
         */
        $this->db->where('idacompanhamento', $idacompanhamento);
        if ($this->db->delete('imoveis_acompanhamento')) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro removido com sucesso');
            redirect(base_url() . 'restrito/imoveis/acompanhamento/' . $sasha);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o Registro');
            redirect(base_url() . 'restrito/imoveis/acompanhamento/' . $sasha);
        }
    }
	
	
    
    function acompanhamento_fotos($idimovel){
        
        $imovel = $this->imoveis_model->registro($idimovel);
        
        
        $data['nomeimovel'] = $imovel[0]->nome;
        $data['titulo'] = "Sistema Administrativo - Área Restrita";
        $data['retorno'] = $imovel[0]->idimoveis;
        
        $this->db->where('idimovel', $idimovel);
        $this->db->order_by('idstats','desc');
        $sql = $this->db->get('imoveis_acompanhamento_stats');
        $data['fotos'] = $sql->result();
        
        // listando apenas as datas
        $busc2 = $this->db->query('select * from imoveis_acompanhamento_stats where idimovel = '.$idimovel.' group by data order by data desc');
        $data['datas'] = $busc2->result();
        

        $this->load->view('restrito/elementos/header', $data);
        $this->load->view('restrito/elementos/topo', $data);
        $this->load->view('restrito/elementos/menu', $data);
        $this->load->view('restrito/imoveis_acompanhamento_fotos', $data);
        $this->load->view('restrito/elementos/footer', $data);
        
    }
    
      function acompanhamentos_fotos_add() {


        $data['data'] = dataSql($this->input->post('dadata'));
        //$data['imagem'] = $this->input->post('imagem');
        $data['idimovel'] = $this->input->post('idimoveis');
		$q = $this->input->post('uploada');
		
		//inserção das multiplas imagens no banco
		//obs: NÃO GRAVA O CAMINHO, APENAS O NOME DA IMAGEM!!!!!!
		for ($i=0 ; $i<count($q) ; $i++) {
		
			$data['imagem'] = $q[$i];
			$this->db->insert('imoveis_acompanhamento_stats', $data);
		
		}       
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Foto inserida com sucesso');
            redirect(base_url() . 'restrito/imoveis/acompanhamento_fotos/' . $this->input->post('idimoveis'));
       // } else {
       //     //Informa o erro e redireciona 
       //     $this->session->set_flashdata('erro', 'Erro ao tentar cadastrar o imóvel');
       //     redirect(base_url() . 'restrito/imoveis/acompanhamento_fotos/' . $this->input->post('idimoveis'));
       // }
    }
    
    function getcidades($estado=null){
       /* 
        * Se estado == null ele apenas lista.
        * Se estado tiver preenchido, ele busca as cidades daquele estado.
        */
        
        if ($estado != null){
            $this->db->where('iduf', $estado);
        }
        $query = $this->db->get('cidades')->result();
            echo "<option>Selecione</option>";
        foreach ($query as $q):
            echo "<option value='".$q->idcidade."'>".$q->cidade."</option>";
        endforeach;
    }
    
    function getbairros($cidade=null){
       /* 
        * Se estado == null ele apenas lista.
        * Se estado tiver preenchido, ele busca as cidades daquele estado.
        */
        
        if ($cidade != null){
            $this->db->where('idcidade', $cidade);
        }
        $query = $this->db->get('bairros')->result();
            echo "<option>Selecione</option>";
        foreach ($query as $q):
            echo "<option value='".$q->idbairro."'>".$q->bairro."</option>";
        endforeach;
    }
	
		 function excluir_foto($id) {

        //descobre o id do imóvel referente à planta
        $this->db->where('idstats', $id);
        $xuxa = $this->db->get('imoveis_acompanhamento_stats');
        $tchutchucao = $xuxa->result();
        $sasha = $tchutchucao[0]->idimovel;
        /*
         * Remove uma planta no banco de dados
         */
        $this->db->where('idstats', $id);
        if ($this->db->delete('imoveis_acompanhamento_stats')) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Registro removido com sucesso');
            redirect(base_url() . 'restrito/imoveis/acompanhamento_fotos/' . $sasha);
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar remover o Registro');
            redirect(base_url() . 'restrito/imoveis/acompanhamento_fotos/' . $sasha);
        }
    }


	function editar_foto($id){
			/* prepara a edição da imagem (apenas para mudar a data) */ 
			$this->db->where('idstats', $id);
			$xuxa = $this->db->get('imoveis_acompanhamento_stats');
			$data['lafoto'] = $xuxa->result();

				$this->load->view('restrito/elementos/header', $data);
				$this->load->view('restrito/elementos/topo', $data);
				$this->load->view('restrito/elementos/menu', $data);
				$this->load->view('restrito/imoveis_acompanhamento_fotos_editar', $data);
				$this->load->view('restrito/elementos/footer', $data);
	
	}


	function acompanhamentos_fotos_alt(){
		/* Edita a imagem do acompanhamento */
		$data['idstats'] = $this->input->post('idstats');
		$data['idimovel'] = $this->input->post('idimoveis');
        $data['data'] = $this->input->post('dadata');
 		$this->db->where('idstats', $data['idstats']);
        if ($this->db->update('imoveis_acompanhamento_stats', $data)) {
            //cadastra na table site os valores, se deu certo informa
            $this->session->set_flashdata('sucesso', 'Índice modificado com sucesso');
            redirect(base_url() . 'restrito/imoveis/acompanhamento_fotos/' . $this->input->post('idimoveis'));
        } else {
            //Informa o erro e redireciona 
            $this->session->set_flashdata('erro', 'Erro ao tentar modificar o indice');
            redirect(base_url() . 'restrito/imoveis/acompanhamento_fotos/' . $this->input->post('idimoveis'));
        }
		
	}

}

?>
