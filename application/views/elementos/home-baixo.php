</div>
<div id="divisor-flue">
<div id="geral-baixo">

<!--===============================  BARRA MEIO DA TELA =====================================
		<div class="boxe">
         <!-- bloco  --
     	<?php $this->load->view('elementos/maisacessados'); //esse comando equivale ao include php ?>
     
     
        <div class="alinhaBt"><a href="#"><img src="<?=base_url();?>assets/imagens/frontend/arrow_right_mini.png" alt="Avançar" name="proximo" width="40" height="46" id="proximo" /></a></div></div>
        <!-- end bloco --
        
         <!-- bloco  --
      <?php $this->load->view('elementos/acomp');?>
        <!-- end bloco --
        </div>
========================================================================================-->        
       

<br />       
<!--=====================================   DIV NOTICIAS   =============================-->   
<div class="espacer"></div>
<div id="noticias-home">
	<h1 id="title_destaque" style="font-size:36px;">Noticias</h1>
    	<div id="tpnoticias"></div>
   		  <div class="homenoticias">
                <?php foreach ($noticias as $noticia): ?>	
                    <div class="lstnoticia">
                    	<h4><?=$noticia->titulo;?></h4>
                        <p><a href="<?=base_url()?>home/noticia/<?=$noticia->idnoticias;?>"><?=substr(strip_tags($noticia->texto),0,440)."...";?></a></p>
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