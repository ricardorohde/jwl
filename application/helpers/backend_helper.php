<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function geraMenu() {


    $ci = & get_instance();
    //Pega os itens do menu
    $busca = $ci->db->get('site');
    $menulado = $busca->result();

   
    if ($menulado == "") {
        return NULL;
    } else {
        return ($menulado);
    }
}

function youtubeVideo($link){
   /* exemplo de link: http://www.youtube.com/watch?v=5DT618KMIvw&feature=g-vrec */
   
    $newlink1 = explode("v=", $link);
    #newlink[0] = http://www.youtube.com/watch;
    #newlink[1] = 5DT618KMIvw&feature=g-vrec
    $newlink2 = explode("&", $newlink1[1]);
    #newlink1[0] = 5DT618KMIvw
    #newlink1[1] = feature=g-vrec --> será descartado
    return $newlink2[0];
}

function renderVideo($video, $largura, $altura){
    $video = '<iframe width="'.$largura.'" height="'.$altura.'" src="http://www.youtube.com/embed/'.$video.'" frameborder="0" allowfullscreen></iframe>';
    return $video;
}
function renderImage($video){
    return 'http://i2.ytimg.com/vi/'.$video.'/default.jpg';
}

function pegaCidade($idcidade) {

    $ci = & get_instance();
    $ci->db->where('id', $idcidade);
    $query = $ci->db->get('cidades');
    $resultado = $query->result();
    if (@$resultado[0]->nome_cidade == '') {
        $retorno = 'local a definir';
    } else {
        $retorno = $resultado[0]->nome_cidade;
    }
    return($retorno);
}

function formataPreco($valor) {
    return number_format($valor, 2, ',', '.');
}

function retira_vazio($array) {
    /* funcao que faz a limpeza dos campos em branco vindo do form. */
    $novoarr = array();
    $put = 0;
    for ($x = 0; $x < count($array); $x++) {
        if ($array[$x] != "") {
            $novoarr[$put] = $array[$x];
            $put++;
        }
    }
    return $novoarr;
}

function ordena($array1, $array2) {
    /*
     * Pega o conteudo do primeiro array, compara com o segundo, 
     * se ambos os indices existirem, ele joga para um novo array.
     */
    $new = array();
    $a = 0;
    for ($i=0 ; $i<count($array1) ; $i++) {
      if ($array1[$i] != "") {  
        if ($array2[$i] != "") {
            $new["iddetalhe"][$a] = $array1[$i];
            $new["valor"][$a] = $array2[$i];
            $a++;
          }
        }
    }
    return($new);
}

function getRespostas($idpergunta) {
    
    // pega o id da pergunta e monta um array comm as respostas do vendedor.
    $ci = & get_instance();
    $ci->db->where('idpergunta', $idpergunta);
    $query = $ci->db->get('produtos_respostas');
    $resultado = $query->result();
         
    if (empty($resultado)){
        return false;
    } else {
        return($resultado); // Retorna o array com as respostas da pergunta.
    }
}

 function pegaProduto($idprod) {
      // pega o id do produto e monta um array com a informação.
    $ci = & get_instance();
    $ci->db->where('id', $idprod);
    $query = $ci->db->get('produtos');
    $resultado = $query->result();
         
    if (empty($resultado)){
        return false;
    } else {
        return($resultado);
    }
 }
 
  function naolidos($produto) {
        $ci = & get_instance();
        $ci->db->where('lido','n');
        $ci->db->where('idproduto',$produto);
        $query = $ci->db->get('produtos_perguntas');
        return $query->num_rows();
 
    
}

function retrieveUser($id) {
        $ci = & get_instance();
        $ci->db->where('id',$id);
        $query = $ci->db->get('usuarios');
        $p = $query->result();
        return $p[0]->usuario;
 
    
}

function dataBra($data){
    $new = explode('-', $data);
    $novadata = $new[2] .'/'. $new[1] .'/' . $new[0];
    return $novadata;
}

function dataSql($data){
    $new = explode('/', $data);
    $novadata = $new[2] .'-'. $new[1] .'-' . $new[0];
    return $novadata;
}

function totalfavs($user) {
    
   //retorna os favoritos de um usuário
    $ci = & get_instance();
    $ci->db->where('idusuario', $user);
    $query = $ci->db->get('favoritos');
    $x = count($query->result());
    return $x;
    
}

function totalpergs($user) {
    
   //retorna os favoritos de um usuário
    $ci = & get_instance();
    $ci->db->where('vendorid', $user);
    $ci->db->where('lido', 'n');
    $query = $ci->db->get('produtos_perguntas');
    $x = $query->num_rows();
    return $x;
    
}

function getProduto($id) {
    
   //retorna os favoritos de um usuário
    $ci = & get_instance();
    $ci->db->where('id', $id);
    $query = $ci->db->get('produtos');
    return $query->result();
    
}

function getUsu($id) {
    
   //retorna os favoritos de um usuário
    $ci = & get_instance();
    $ci->db->where('id', $id);
    $query = $ci->db->get('usuarios');
    return $query->result();
    
}

function getStatus($num){
    switch($num){
        case 1:
        $ret = 'Em Andamento';    
        break;
    
        case 2:
        $ret = 'Cancelado';    
        break;    
    
        case 3:
        $ret = 'Negócio Fechado';    
        break;
    
        case 4:
        $ret = 'Encerrado';    
        break;
    }
    
    return $ret;
}

function lista_estados() {

    $ci = & get_instance();
    $ci->db->order_by('nome_estado', 'asc');
    $query = $ci->db->get('estados');
    return($query->result());
   
}

function lista_cidades($estados) {

    $ci = & get_instance();
    $ci->db->where('estado', $estados);
    $ci->db->order_by('nome_cidade', 'asc');
    $query = $ci->db->get('cidades');
    return($query->result());
   
}

function lista_tipos() {
    
    $ci = & get_instance();
    $ci->db->group_by("item"); 
    $query = $ci->db->get('subcategorias_itens');
    return($query->result());
   
}

function pegaTipo($tipo) {
    $ci = & get_instance();
    $ci->db->where('id', $tipo);
    $ci->db->group_by("item"); 
    $query = $ci->db->get('subcategorias_itens');
    return($query->result());
}

function getEstado($id) {

    $ci = & get_instance();
    $ci->db->where('id', $id);
    $query = $ci->db->get('estados');
    $p = $query->result();
    return($p[0]->nome_estado);
   
}
function getSigla($id) {

    $ci = & get_instance();
    $ci->db->where('id', $id);
    $query = $ci->db->get('estados');
    $p = $query->result();
    return($p[0]->sigla);
   
}
function dataFormat($data) {
   //formato da data: 2011-12-21 09:29:40
   //como ficará:     21-12-2011 09:29:40
     $exp    = explode(" ",$data);
     $dia    = $exp[0];
     $ndia   = explode('-',$dia);     
     $date   = $ndia[2] . '/' . $ndia[1] . '/' . $ndia[0];
     $hora   = $exp[1];
     $remonta = $date . ' ' . $hora;
     
     return($remonta);
     
     
}

function nomeuf($id){
    $ci = & get_instance();
    $ci->db->where('idestado', $id);
    $query = $ci->db->get('estados');
    $p = $query->result();
    return($p[0]->estado);
    
}
function nomecid($id){
    $ci = & get_instance();
    $ci->db->where('idcidade', $id);
    $query = $ci->db->get('cidades');
    $p = $query->result();
    return($p[0]->cidade);
    
}
function nomebairro($id){
    $ci = & get_instance();
    $ci->db->where('idbairro', $id);
    $query = $ci->db->get('bairros');
    $p = $query->result();
    return($p[0]->bairro);
    
}