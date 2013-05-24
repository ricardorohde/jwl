</div>





<div id="geral-baixo">

       

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Imóveis &raquo; <?=$imoveis[0]->nome;?> &raquo; Plantas</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               <!-- inicio conteudo imoveis -->
                 <ul class="menuimoveis">
                  <?php $idmovel = $imoveis[0]->idimoveis; ?>
 
               <li><a href="<?=base_url()?>imoveis/ver/<?=$imoveis[0]->idimoveis?>">Apresentação</a></li>
               

               <li class="ativo"><a href="<?=base_url() . 'imoveis/plantas/'. $imoveis[0]->idimoveis;?>">Plantas</a></li>
               
               
             
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
               
               
                <?php  if (empty($imoveis[0]->realizacao)) 
			   				{ 
							 $class = 'class="suspend"';
						     $link  = '#';
							} 	else { 
							 $class = '';
						     $link  = base_url() . 'imoveis/realizacao/'. $imoveis[0]->idimoveis;
							}  
				?>
               <li <?=$class?>><a href="<?=$link?>">Realização</a></li>
               
               
               
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
					<?php foreach ($plantas as $planta): ?>
                    
                    <a href="<?=$planta->planta?>" rel="lightbox[plantas]">
                        <p class="imapa"><span class="porcima"><?=$planta->legenda?></span>
                            <img src="<?=$planta->planta?>" width="284px" /></p>
					</a>
                     
<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });
  
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>       
                            
                            
                    <?php endforeach; ?>
                          
                 		<?php //foreach ($plantas as $planta): ?>
						    <!-- <p class="imapa"><img src="<?=$planta->planta?>" width="284px" /> -->
                        <?php //endforeach; ?>
                 
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

