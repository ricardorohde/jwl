</div>
        <?php
			$pSQL = $this->db->query('SELECT * FROM home_info');
		foreach ($pSQL->result_array() as $row){
		   $tel_home = $row['tel_home'];
		   $email_home = $row['email_home'];
		   $endereco_home = $row['endereco_home'];
		   $facebook = $row['facebook'];
		   $twitter = $row['twitter'];
		   $youtube = $row['youtube'];
		   $skype = $row['skype'];
		   $mapa_home = $row['mapa_home'];
		} 
		 ?>
<div id="rodape">
    <div id="divisao_footer"></div>
    <div id="predios_back">
    	<div id="box_rodape">
        <a style="float:left;" href="http://localhost:85/jwl/">
	        <img src="<?=base_url()?>assets/imagens/frontend/logo_jwl.jpg" style="border-radius:15px;box-shadow:0px 0px 10px #000;margin:10px 0 0 0">
        </a>
        
        
        
		<?php 
		$add_id = $mapa_home;			
			$scriptnew = explode("<iframe>", $add_id);
		
        	$mapa_id = '<iframe id="mapa_google_maps" '.$scriptnew[0].' </iframe>';
			echo $mapa_id;
		?>
        
        <div id="icons_socials">
        <?php 
			if($facebook != '#'){
            echo '<a href="'.$facebook.'"><p class="icon_soc" id="facebook"></p></a>';}
			if($twitter != '#'){
            echo '<a href="'.$twitter.'"><p class="icon_soc" id="twitter"></p></a>';}
			if($youtube != '#'){
            echo '<a href="'.$youtube.'"><p class="icon_soc" id="youtube"></p></a>';}
			if($email_home != '#'){
            echo '<a href="'.$email_home.'"><p class="icon_soc" id="email"></p></a>';}
		?>
        </div>
        
      
        <div id="text_endereco"><p><?=$endereco_home;?><br/><br/><center>Tel: <?=$tel_home;?></center></p></div>
         
		<?php
			if($skype != ''){
			echo '<div id="skypes_foot">
			<h1 id="title_skype">Skypes disponiveis</h1>
				<p id="text_skype">
				'.$skype.'
				</p>
			</div>';}
		?>
            
            
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
            
            $arrAux = array('venda'=>utf8_decode( $dados->item($i+2)->nodeValue ), 'variacao'=>utf8_decode( $dados->item($i+3)->nodeValue ) );    
        
            array_push( $saida, (object)$arrAux );    
        }
    }
    
    return $saida;
}
      
      $minhaCotacao = eCotafacil();
$val_com = $minhaCotacao[1]->variacao;
$val_tur = $minhaCotacao[2]->variacao;
$val_euro = $minhaCotacao[3]->variacao;
	// cores dos valores
	if($val_com > $val_tur and $val_com > $val_euro ){
		$cor_com = 'green';
		if($val_tur > $val_euro){
			$cor_tur = 'orange';
			$cor_euro = 'red';
		}else{
			$cor_tur = 'red';
			$val_euro = 'orange';	
		}
	}else
	if($val_tur > $val_com and $val_tur > $val_euro){
		$cor_tur = 'green';
		if($val_com > $val_euro){
			$cor_com = 'orange';
			$cor_euro = 'red';
		}else{
			$cor_com = 'red';
			$cor_euro = 'orange';			
		}
	}else
	if($val_euro > $val_com and $val_euro > $val_tur){
		$cor_euro = 'green';
		if($val_com > $val_tur){
			$cor_com = 'orange';
			$cor_tur = 'red'; 
		}else{
			$cor_com = 'red';
			$cor_tur = 'orange';
		}
	}
?>	

<div class="estilo_cotacao">
    <table width="200" border="1" cellpadding="10" id="tabela_cotacao">
      <tr>
        <th><p>Dólar Com:</p></th>
        <th><p class="valor_cotacao" style="color:<?=$cor_com?>;">$<?=$val_com?></p></th>
      </tr>
      <tr>
        <td><p>Euro:</p></td>
        <td><p class="valor_cotacao" style="color:<?=$cor_euro?>;">&euro;<?=$val_euro?></p></td>
      </tr>
      <tr>
        <td><p>Dólar Tur:</p></td>
        <td><p class="valor_cotacao" style="color:<?=$cor_tur?>;">$<?=$val_tur?></p></td>
      </tr>
    </table>
    
    </div>
</div>
<!--========================================================================================-->            
            
            
		</div>
	</div>  		
</div>


		

        <!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --<div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">

/* <![CDATA[ */

var script = document.createElement("script");script.type="text/javascript";var src = "http://www.atendimentoon.com.br/metron/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);

/* ]]> */

</script><noscript><img src="http://www.atendimentoon.com.br/metron/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript><!-- http://www.LiveZilla.net Tracking Code -->

	</body>
</html>