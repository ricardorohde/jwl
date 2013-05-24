   <div id="mais-acessados">
        	<h1 class="scond">Imóveis Mais Acessados</h1>
            <?php 
				//busca no helper a lista com o top10 imóveis
				$top10 = topdez();
				$i = 1;
			?>
           
            <div id="maisacc">	
              <?php foreach ($top10 as $r): 
			  		if ($i < 6) {
			  ?>
             	  <div class="mv"><a href="<?=base_url()?>/imoveis/ver/<?=$r->idimoveis?>"><?=$i . ' - ' . $r->nome; ?></a></div>
                  
			  <?php  } $i++; endforeach;?>
				
					

              
                
   </div>