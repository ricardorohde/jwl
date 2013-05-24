
</div>
<div style="height:21px; clear:both;"></div>
<div id="divisor-flue-interno">
<div id="geral-baixo">

		<div class="boxe">
         <!-- bloco  -->
     	<?php $this->load->view('elementos/maisacessados'); //esse comando equivale ao include php ?>
     
     
        <div class="alinhaBt"><a href="#"><img src="<?=base_url();?>assets/imagens/frontend/arrow_right_mini.png" alt="Avançar" name="proximo" width="40" height="46" id="proximo" /></a></div></div>
        <!-- end bloco -->
        
         <!-- bloco  -->
         <?php $this->load->view('elementos/acomp');?>
        <!-- end bloco -->
        </div>
        
       

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Notícias &raquo; <?=$noticias[0]->titulo;?></h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               <p>Data: <?=dataBra($noticias[0]->data);?> | <a href="javascript:history.go(-1)">Voltar</a></p>
               
                  <?=$noticias[0]->texto; ?>
               
         </div>
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
    <?php $this->load->view('elementos/rodape');?>
      
</div>