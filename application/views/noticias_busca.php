
</div>
<div id="geral-baixo">
   

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Resultados da Busca: </h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
                <?php foreach ($busca as $noticia): ?>	
                    <div class="lstnoticia">
                    	<h4><?=$noticia->titulo;?></h4>
                        <p><a href="<?=base_url()?>home/noticia/<?=$noticia->idnoticias;?>"><?=substr(strip_tags($noticia->texto),0,140)."...";?></a></p>
                    </div>
                <?php endforeach; ?>
               
         </div>
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
    <?php $this->load->view('elementos/rodape');?>
      
</div>