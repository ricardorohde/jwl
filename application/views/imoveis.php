</div>
<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo"><?=$tit;?></h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               
                <!-- imoveis -->        
                
                <ul class="limoveis">
                        <?php foreach ($imoveis as $im): ?>
     	<a href="<?=base_url()?>imoveis/ver/<?=$im->idimoveis?>">
            <li>
                <div class="limoveis-foto"><img src="<?=$im->fotocapa?>" width="145" height="160" alt="Prédio" /></div>
				
                <div class="limoveis-descr">
                    <h3><?=$im->nome;?></h3>
                    <div id="desc_imovel_2">
                    	<p>
<?php
// veirifica o tipo do imovel : Compra,Aluguel.... //
	
		$pSQL = $this->db->query('SELECT tipo FROM imoveis_tipo WHERE idtipo = '.$im->tipo);
		foreach ($pSQL->result_array() as $row){
		   $tipo_imovel = $row['tipo'];
		}
		echo '<span id="tp_imov_card">'.$im->tipo_imovel.'</span><br>';
    if($im->qtd_quarto != '' or $im->qtd_quarto != 0){
		echo $im->qtd_quarto.'<br>'; }
	if($im->qtd_suite != '' or $im->qtd_suite != 0){
		echo $im->qtd_suite.'<br>'; }
	if($im->qtd_garagem != '' or $im->qtd_garagem != 0){
		echo $im->qtd_garagem.'<br>';	}
	if($im->qtd_torre != '' or $im->qtd_torre != 0){
		echo $im->qtd_torre.'<br>'; }
	if($im->complementos != ''){
		echo $im->complementos.'<br>'; }
	if($im->tamanho_area != ''){
		echo $im->tamanho_area.' m&sup2;<br>'; }
?>		
						</p>
                    </div>
                    		<div id="banner_tipo"><p id="banner_tipo_txt"><?=$tipo_imovel;?></p>
                            <p id="estado_cidade_imovel"><?=@nomecid($im->cidade).' <br /> ' . @nomebairro($im->bairro) ;?></p></div>
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