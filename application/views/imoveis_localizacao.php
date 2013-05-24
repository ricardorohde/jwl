</div>

<div id="geral-baixo">

       

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Imóvel: <?=$imoveis[0]->nome;?> - Localização</h1>
            <div id="tpnoticias"></div>
<!--======================================= MENU =========================================-->
   		  <div class="interno-conteudo">
               <!-- inicio conteudo imoveis -->
                 <ul class="menuimoveis">
                 <?php $idmovel = $imoveis[0]->idimoveis; ?>
 
               <li><a href="<?=base_url()?>imoveis/ver/<?=$imoveis[0]->idimoveis?>" style="border-radius:8px 0 0 8px;">Apresentação</a></li>            
             
                <?php if (checaRegistro('imoveis_perspectiva', $idmovel) == false) 
			             { 
						   $class = 'class="suspend"';
						   $link  = '#';
						 } else {
					     	$class = '';
							$link  = base_url() . 'imoveis/perspectivas/'. $imoveis[0]->idimoveis;
						 }
			   ?>
               <li <?=$class?>><a href="<?=$link?>">Fotos</a></li>
               
               
               
               

                <?php  if (empty($imoveis[0]->localizacao)) 
			   				{ 
							 $class = 'class="suspend"';
						     $link  = '#';
							} 	 else {
							 $class = '';
						     $link  = base_url() . 'imoveis/localizacao/'. $imoveis[0]->idimoveis;
							}
				?>
               <li class="ativo"><a href="<?=$link?>">Localização</a></li>
               
               
      
                    <?php  if (empty($imoveis[0]->valores)) 
			   				{ 
							 $class = 'class="suspend"';
						     $link  = '#';
							} else { 
							 $class = '';
						     $link  = base_url() . 'imoveis/valores/'. $imoveis[0]->idimoveis;
							} 	 
				?>
               <li <?=$class?>><a href="<?=$link?>">Valores</a></li>
              
                           
                <?php if (checaRegistro('imoveis_videos', $idmovel) == false) 
			             { 
						   $class = 'class="suspend"';
						   $link  = '#';
						 } else { 
						   $class = '';
						   $link  = base_url() . 'imoveis/videos/'. $imoveis[0]->idimoveis;
						 }
						 
			   ?>
               <li <?=$class?>><a href="<?=$link?>">Vídeos</a></li>
               
               
               
               
                <?php  if (empty($imoveis[0]->acesse)) 
			   				{ 
							 $class = 'class="suspend"';
						     $link  = '#';
							} 	else { 
							 $class = '';
							 $condicional = explode('http:\\',$imoveis[0]->acesse);

						     $link  = 'http://'.$condicional[0];
							}
				?>
               <li <?=$class?>><a href="<?=$link?>" style="border-radius:0 8px 8px 0;">Acesse o site</a></li>
    	</ul>
<!--=====================================================================================-->       
                 
         	<div class="quad-imoveis">   
                 <div class="dados_sobre_imovel2">
                 	<div id="localizacao_aligin">     
                         <div id="desc_localiza"><?=nl2br($imoveis[0]->localizacao)?></div>
                         	<br /><br />
                         <div class="mapa"><?=$imoveis[0]->googlemaps?></div>
                         	<br /><br />
					</div>
                 </div>
			</div>
			                 
               <!-- final conteudo imoveis -->
         </div>
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
     <?php $this->load->view('elementos/rodape');?>
      
</div>