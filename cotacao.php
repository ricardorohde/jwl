<!--===================================== COTACAO DOLLAR ===================================-->      
<div id="cotacoes">
<?php      
    function eCotafacil(){
    $saida = array();
    
    libxml_use_internal_errors( TRUE );
    
    $file = file_get_contents( 'http://economia.uol.com.br/cotacoes/' );
    $file = strtr( $file, array( 'th'=>'td', '(em R$)'=>'' ) );
    
    $DOM  = new DOMDocument();
    $DOM -> loadHTML( $file );
    
    $dados = $DOM->getElementsByTagName( 'td' );
    
    for( $i=37; $i<60; $i++ ){
        if($i == 37 || $i == 41 || $i == 45 || $i == 49 || $i == 53 || $i == 57){
            
 /*           $arrAux = array('compra'=>utf8_decode( $dados->item($i+5)->nodeValue ),'venda'=>utf8_decode( $dados->item($i+2)->nodeValue ), 'variacao'=>utf8_decode( $dados->item($i+3)->nodeValue ) );    */
 
             $arrAux = array('compra'=>utf8_decode( $dados->item($i+3)->nodeValue ),
			 				 'variacao'=>utf8_decode( $dados->item($i+5)->nodeValue ) );
        
            array_push( $saida, (object)$arrAux );    
        }
    }
    
    return $saida;
}
      
      $minhaCotacao = eCotafacil();
$val_com = $minhaCotacao[1]->compra;
$var_com = $minhaCotacao[1]->variacao;

$val_tur = $minhaCotacao[2]->compra;
$var_tur = $minhaCotacao[2]->variacao;

$val_euro = $minhaCotacao[3]->compra;
$var_euro = $minhaCotacao[3]->variacao;

// cores dos valores
$s1 = substr($var_com , 5 , 1 );
	if($s1 == "-"){
		$cor_com = 'red';
	}else if($s1 == "+"){
		$cor_com = 'green';
	}else{
		$cor_com = 'orange';
	}
// cores dos valores
$s2 = substr($var_euro , 5 , 1 );
	if($s2 == "-"){
		$cor_euro = 'red';
	}else if($s2 == "+"){
		$cor_euro = 'green';
	}else{
		$cor_euro = 'orange';
	}
// cores dos valores
$s3 = substr($var_tur , 5 , 1 );
	if($s3 == "-"){
		$cor_tur = 'red';
	}else if($s3 == "+"){
		$cor_tur = 'green';
	}else{
		$cor_tur = 'orange';
	}
?>	

<div class="estilo_cotacao">
    <table width="200" border="1" cellpadding="10" id="tabela_cotacao">
      <tr>
        <td><p>D&oacute;lar Com:</p></td>
        <td><p class="valor_cotacao">$<?=$val_com?></p></td>
        <td><p class="valor_cotacao" style="color:<?=$cor_com?>;"><?=$var_com?></p></td>
      </tr>
      <tr>
        <td><p>Euro:</p></td>
        <td><p class="valor_cotacao">&euro;<?=$val_euro?></p></td>
        <td><p class="valor_cotacao" style="color:<?=$cor_euro?>;"><?=$var_euro?></p></td>
      </tr>
      <tr>
        <td><p>D&oacute;lar Tur:</p></td>
        <td><p class="valor_cotacao">$<?=$val_tur?></p></td>
        <td><p class="valor_cotacao" style="color:<?=$cor_tur?>;"><?=$var_tur?></p></td>
      </tr>
    </table>
    
    </div>
</div>