</div>

<div id="geral-baixo">

       

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Imóveis &raquo; <?=$imoveis[0]->nome;?> &raquo; Acompanhamento das Obras</h1>
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
               
               
               
               
               <li class="ativo"><a href="<?=base_url()?>imoveis/acompanhamento/<?=$imoveis[0]->idimoveis?>">Acompanhe a Obra</a></li>
               
               
               
               
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
                 
                 <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
                 
                 <div class="quad-imoveis">
                 
                 		<div class="left48">
						     <h2 class="h2format">Imagens: 
								
              
              <?php if (!empty($datas)) {?>
                               <label for="selfotos"></label>
						       <select name="selfotos" id="selfotos">
	                               <option>Selecione a data</option>
                                 
								 <?php foreach ($datas as $dd): ?>
			                        <option value="<?=$dd->data?>"><?=dataBra($dd->data)?></option>
                                 <?php endforeach; ?>
					           </select>
                               <input name="elimnovel" id="elimnovel" type="hidden" value="<?=$dd->idimovel?>" />
						     </h2>
								<div id="magens" class="gruimg">                                
                                	<?php foreach ($ultimas as $ult): ?>
	                                	<div class="trataimg">
                                       	   <a href="<?=$ult->imagem?>"><img src="<?=$ult->imagem?>" width="100"  /></a>
                                        </div>
                                    <?php endforeach; ?>
                         		</div>
                                <? } else { '<p>Nenhuma imagem disponibilizada até o momento</p>'; } ?>
   		      </div>
                        <div class="right48">
                        	<h2 class="h2format">Andamento da Obra</h2>
                            
                            <?php 
							function trata($p)
								{
									$dividendo = 350 * $p; //(regra de três: 350 x valor fornecido)
									$divisor   = 100;
									$result = $dividendo/$divisor;							
									return($result);
									
								}
							?>
                            <?php foreach($grafico as $gg): 
							
								?>
                            	
                            	<div class="titgraf"><?=$gg->item?></div>
                                 <div class="laporc"><?=$gg->porc?>%</div>
                                <div class="barr">
									 <!-- barra com a porcentagem -->
                                       <div class="barr" style="background-color:#900; width: <?=trata($gg->porc)?>px; height:10px;"></div>
                                     <!-- end barra porcentagem -->
                                </div>
                               
                            <?php endforeach; ?>
                            
                        </div>
                        
                       <!-- <div id="listadefotos">xD</div>-->
                 
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