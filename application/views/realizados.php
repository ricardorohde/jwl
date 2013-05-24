</div>


<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">
    <h1 class="h1titulo">Home &raquo; Obras Realizadas</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               
                <!-- imoveis -->
                
                <ul class="limoveis">
                        <?php foreach ($imoveis as $im): ?>
            	<li>
                <div class="limoveis-foto"><img src="<?=$im->fotocapa?>" width="145" height="160" alt="Prédio" /></div>
                <div class="limoveis-descr">
                    <h3><?=$im->nome?></h3>
                    <!--<p class="ilocal"><#$im->localizacao?></p>-->
                    <p class="idescr"><?=nl2br($im->minidescr)?>
                    </p>
                    
                </div>
                </li>
            
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