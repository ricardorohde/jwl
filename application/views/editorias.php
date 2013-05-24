
</div>


<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo"><?=$editoria[0]->titulo;?></h1>
            <div id="tpnoticias"></div>
   		     <center>
              <div class="quad-imoveis">  
               	<div class="dados_sobre_imovel2">
                 	<div id="localizacao_aligin">     
                         <div id="text_empresa"><?=$editoria[0]->conteudo; ?></div>
					</div>
                 </div>
           	</div>
          </center>
                  
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
     <?php $this->load->view('elementos/rodape');?>
      
</div>
</div>