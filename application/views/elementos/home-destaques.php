<?php
if (!empty($destaques)) { // só exibe os destaques se houver.
?>
<br />
<div id="destaques">
            	<!-- destaques aqui Carrossel -->

	<div id="wrap_carousel_2">	
        <h1 id="title_destaque">Destaques</h1>
		<div id="carousel_2">
        <div id="home_destaque">

		  <ul>
			<?php 
			$pSQL = $this->db->query('SELECT qnt_destaque FROM home_info');
			foreach ($pSQL->result_array() as $row){
			   $qnt_destaque = $row['qnt_destaque'];
			}   
			
			
			$x = 0;
			foreach ($destaques as $dest): 
			if ($x < $qnt_destaque) {
			?>
            <a href="<?=base_url() . 'imoveis/ver/' . $dest->idimoveis; ?>">
				<li>
	                 <img src="<?=$dest->fotocapa;?>" alt="" width="150" height="115" />
                     <img src="<?=base_url()?>/assets/imagens/frontend/star_destaque.png" alt="" id="star_destaque"/>		
                     <br  />
                     <h4 class="nomev"><?=$dest->nome;?></h4>
                     <p id="legend_destaque">
                        <?php
							if($dest->tipo_imovel != ''){
								echo $dest->tipo_imovel.' com:<br>';
							}
							if($dest->qtd_quarto != ''){
								echo $dest->qtd_quarto.'<br>';
							}
							if($dest->qtd_suite != ''){
								echo $dest->qtd_suite.'<br>';
							}
							if($dest->qtd_garagem != ''){
								echo $dest->qtd_garagem.'<br>';
							}
							if($dest->qtd_torre != ''){
								echo $dest->qtd_torre.'<br>';
							}
							/*if($dest->complementos != ''){
								echo $dest->complementos.'<br>';
							}*/
							if($dest->tamanho_area != ''){
								echo $dest->tamanho_area.'m&sup2;<br>';
							}
							
							
					 		echo @nomecid($dest->cidade).' <br /> ' . @nomebairro($dest->bairro) ;
                      	?>
                        </p>
                </li>
                </a>
            <?php $x++; ?>
            <?php 
			} else {
				echo "</ul><ul>";
			}			
			endforeach; 
			?>
		  </ul>
			</div>
		</div><!-- carousel_2 -->
	</div><!-- /wrap_carousel_2 -->
       

</div>
<?php } //fim do if?>    





<!--
<li>
	                 <a href="<?=base_url() . 'imoveis/ver/' . $dest->idimoveis; ?>"><img src="<?=$dest->fotocapa;?>" alt="" width="150" height="115" /></a>
                     <br  />
                     <h4 class="nomev"><a href="<?=base_url() . 'imoveis/ver/' . $dest->idimoveis; ?>"><?=$dest->nome;?></a></h4>
                     <h5><a href="<?=base_url() . 'imoveis/ver/' . $dest->idimoveis; ?>"><strong class="nomec"><?=@nomecid($dest->cidade).'</strong>' . ' <br /> ' . '<strong class="nomeb">' . @nomebairro($dest->bairro) ;?></strong></a></h5>
                </li>-->