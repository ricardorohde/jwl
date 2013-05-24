</div>

<div id="geral-baixo">


       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Imóvel: <?=$imoveis[0]->nome;?> - Apresentação</h1>
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
                 
                 		<div class="left48">
						     <p class="ima"><img src="<?=$imoveis[0]->fotocapa?>" width="284px" /></p>
                        
                        <!--<div class="right48">
                        	!-- <?=@nomecid($imoveis[0]->cidade) . ' - ' . @nomebairro($imoveis[0]->bairro) ;?> --
                        	 <?=$imoveis[0]->descricao;?>
                        </div>-->
                        
                        <div class="dados_sobre_imovel">
                        	<p id="title_dados_imovel">Sobre o imóvel: <?=$imoveis[0]->nome;?></p>
                            <br />
                            
                            <div id="tp_imovel">
                        <?php
						
	//======= busca ESTADO , CIDADE e BAIRRO no BANCO conforme o ID passado =============				
		$id_estado = $imoveis[0]->estado;
		$pSQL = $this->db->query('SELECT estado FROM estados WHERE idestado = '.$id_estado);
		foreach ($pSQL->result_array() as $row){
		   $estado_ok = $row['estado'];
		}
		$id_cidade = $imoveis[0]->cidade;
		$pSQL = $this->db->query('SELECT cidade FROM cidades WHERE idcidade = '.$id_cidade);
		foreach ($pSQL->result_array() as $row){
		   $cidade_ok = $row['cidade'];
		}
		$id_bairro = $imoveis[0]->bairro;
		$pSQL = $this->db->query('SELECT bairro FROM bairros WHERE idbairro = '.$id_bairro);
		foreach ($pSQL->result_array() as $row){
		   $bairro_ok = $row['bairro'];
		}
							
			
			
                            if($imoveis[0]->tipo_imovel == 'Apartamento'){
                           	   echo '<div id="ap"></div><div id="intruc_imovel"><p id="explic_imovel">Tipo do Imóve: <span id="txt_azul_imovel">Apartamento</span>';
							}else
							if($imoveis[0]->tipo_imovel == 'Casa'){
								echo '<div id="casa"></div><div id="intruc_imovel"><p id="explic_imovel">Tipo do Imóve: <span id="txt_azul_imovel">Casa</span>';
							}else
							if($imoveis[0]->tipo_imovel == 'Kitnet'){
								echo '<div id="kitnet"></div><div id="intruc_imovel"><p id="explic_imovel">Tipo do Imóve: <span id="txt_azul_imovel">Kitnet</span>';
							}
						?>
                        <br />
                        Estado: <span id="txt_azul_imovel"><?=$estado_ok?></span><br />
                        Cidade: <span id="txt_azul_imovel"><?=$cidade_ok?></span><br />
                        Bairro: <span id="txt_azul_imovel"><?=$bairro_ok?></span><br />
                        Local: <span id="txt_azul_imovel"><?=$imoveis[0]->localizacao;?></span>
                        
                        </div><!--fim instruc_imovel -->
                        </div>
                            <br />
                            <?php
							if($imoveis[0]->qtd_quarto != '' or $imoveis[0]->qtd_quarto != 0){
                           		echo '<p id="text_dados_imovel">'.$imoveis[0]->qtd_quarto.'</p>';
							}
							if($imoveis[0]->qtd_suite != '' or $imoveis[0]->qtd_suite != 0){
                           		echo '<p id="text_dados_imovel">'.$imoveis[0]->qtd_suite.'</p>';
							}
							if($imoveis[0]->qtd_garagem != '' or $imoveis[0]->qtd_garagem != 0){
                           		echo '<p id="text_dados_imovel">'.$imoveis[0]->qtd_garagem.'</p>';
							}
							if($imoveis[0]->qtd_torre != '' or $imoveis[0]->qtd_torre != 0){
                           		echo '<p id="text_dados_imovel">'.$imoveis[0]->qtd_torre.'</p>';
							}
							if($imoveis[0]->complementos != ''){
                           		echo '<p id="text_dados_imovel">'.$imoveis[0]->complementos.'</p>';
							}
							if($imoveis[0]->tamanho_area != ''){
                           		echo '<p id="text_dados_imovel">'.$imoveis[0]->tamanho_area.' m&sup2;</p>';
							}
							?>
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