</div>
<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Resultado Busca</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               
                <!-- imoveis -->        
                
                <ul class="limoveis">
                        <?php foreach ($busca as $imoveis): ?>
     	<a href="<?=base_url()?>imoveis/ver/<?=$imoveis->idimoveis?>">
            <li>
                <div class="limoveis-foto"><img src="<?=$imoveis->fotocapa?>" width="145" height="160" alt="Prédio" /></div>
				
                <div class="limoveis-descr">
                    <h3><?=$imoveis->nome;?></h3>
                    <div id="desc_imovel_2">
                    	<p>
<?php
// veirifica o tipo do imovel : Compra,Aluguel.... //
	
		$pSQL = $this->db->query('SELECT tipo FROM imoveis_tipo WHERE idtipo = '.$imoveis->tipo);
		foreach ($pSQL->result_array() as $row){
		   $tipo_imovel = $row['tipo'];
		}
		echo '<span id="tp_imov_card">'.$imoveis->tipo_imovel.'</span><br>';
    if($imoveis->qtd_quarto != '' or $imoveis->qtd_quarto != 0){
		echo $imoveis->qtd_quarto.'<br>'; }
	if($imoveis->qtd_suite != '' or $imoveis->qtd_suite != 0){
		echo $imoveis->qtd_suite.'<br>'; }
	if($imoveis->qtd_garagem != '' or $imoveis->qtd_garagem != 0){
		echo $imoveis->qtd_garagem.'<br>';	}
	if($imoveis->qtd_torre != '' or $imoveis->qtd_torre != 0){
		echo $imoveis->qtd_torre.'<br>'; }
	if($imoveis->complementos != ''){
		echo $imoveis->complementos.'<br>'; }
	if($imoveis->tamanho_area != ''){
		echo $imoveis->tamanho_area.' m&sup2;<br>'; }
?>		
						</p>
                    </div>
                    		<div id="banner_tipo"><p id="banner_tipo_txt"><?=$tipo_imovel;?></p>
                            <p id="estado_cidade_imovel"><?=@nomecid($imoveis->cidade).' <br /> ' . @nomebairro($imoveis->bairro) ;?></p></div>
                </div>
          	</li>
     	</a> 
           
            <?php endforeach; ?>
            
             
               
            </ul>
                
                <!-- end imoveis -->
               
         </div>
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
    <?php $this->load->view('elementos/rodape'); ?>
      
</div>