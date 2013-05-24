</div>

<div id="geral-baixo">

       

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Imóvel: <?=$imoveis[0]->nome;?> - Fotos</h1>
            <div id="tpnoticias"></div>
<!--======================================= MENU =========================================-->
   		  <div class="interno-conteudo">
               <!-- inicio conteudo imoveis -->
                 <ul class="menuimoveis">
                 <?php $idmovel = $imoveis[0]->idimoveis; ?>
 
               <li class="ativo"><a href="<?=base_url()?>imoveis/ver/<?=$imoveis[0]->idimoveis?>" style="border-radius:8px 0 0 8px;">Apresentação</a></li>            
             
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
                 
                         
                 		<?php foreach ($lazer as $laser): ?>
                        	<a href="<?=$laser->imagem?>" rel="lightbox[ser]"  title="<?=$laser->servico?>"> 
						    	<p class="imapa"><span class="porcima"><?=$laser->servico?></span><img src="<?=$laser->imagem?>" width="284px" /></p>
                        	</a>
                        <?php endforeach; ?>
                  
                        
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