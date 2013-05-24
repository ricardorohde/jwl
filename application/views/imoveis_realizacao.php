</div>

<div id="geral-baixo">


       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Imóveis &raquo; <?=$imoveis[0]->nome;?> &raquo; Realização</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               <!-- inicio conteudo imoveis -->
                 <ul class="menuimoveis">
                 <?php $idmovel = $imoveis[0]->idimoveis; ?>
 
               <li><a href="<?=base_url()?>imoveis/ver/<?=$imoveis[0]->idimoveis?>">Apresentação</a></li>
               

              <?php if (checaRegistro('imoveis_plantas', $idmovel) == false) 
			             { 
						   $class = 'class="suspend"';
						   $link  = '#';
						 } else {
   					   	   $class = '';
						   $link  = base_url() . 'imoveis/plantas/'. $imoveis[0]->idimoveis;
						 }
			   ?>
               <li <?=$class?>><a href="<?=$link?>">Plantas</a></li>
               
             
                <?php if (checaRegistro('imoveis_perspectiva', $idmovel) == false) 
			             { 
						   $class = 'class="suspend"';
						   $link  = '#';
						 } else {
					     	$class = '';
							$link  = base_url() . 'imoveis/perspectivas/'. $imoveis[0]->idimoveis;
						 }
			   ?>
               <li <?=$class?>><a href="<?=$link?>">Perspectivas | Fotos</a></li>
               
               
               
                  <?php if (checaRegistro('imoveis_servicos', $idmovel) == false) 
			             { 
						   $class = 'class="suspend"';
						   $link  = '#';
						 }  else {
						   $class = '';
						   $link  = base_url() . 'imoveis/lazer/'. $imoveis[0]->idimoveis;
						 }
			   ?>
               <li <?=$class?>><a href="<?=$link?>">Lazer</a></li>
               

                <?php  if (empty($imoveis[0]->localizacao)) 
			   				{ 
							 $class = 'class="suspend"';
						     $link  = '#';
							} 	 else {
							 $class = '';
						     $link  = base_url() . 'imoveis/localizacao/'. $imoveis[0]->idimoveis;
							}
				?>
               <li <?=$class?>><a href="<?=$link?>">Localização</a></li>
               
               
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
               
               

               <li class="ativo"><a href="<?=base_url() . 'imoveis/realizacao/'. $imoveis[0]->idimoveis;?>">Realização</a></li>
               
               
               
                <?php if (checaRegistro('imoveis_acompanhamento', $idmovel) == false) 
			             { 
						   $class = 'class="suspend"';
						   $link  = '#';
						 } else {
					     	$class = '';
							$link  = base_url() . 'imoveis/acompanhamento/'. $imoveis[0]->idimoveis;
						 }
			   ?>
               <li <?=$class?>><a href="<?=$link?>">Acompanhe a Obra</a></li>
               
               
               
               
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
						     $link  = base_url() . 'imoveis/acesse/'. $imoveis[0]->idimoveis;
							}
				?>
               <li <?=$class?>><a href="<?=$link?>">Acesse o site</a></li>
                 </ul>
                 
                 <div class="quad-imoveis">           

						<?=$imoveis[0]->realizacao?>
                        
                 <p>&nbsp;</p>
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