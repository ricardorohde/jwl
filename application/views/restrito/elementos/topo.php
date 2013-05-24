<?php
$nome_dia = '';
		//setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");  
		setlocale(LC_ALL, 'ptb', 'pt_BR', 'portuguese-brazil', 'bra', 'brazil', 'pt_BR.utf-8', 'pt_BR.iso-8859-1', 'br');
		date_default_timezone_set('America/Sao_Paulo');  
	  
	  	$hr = date("H");

		if($hr >= 12 && $hr<18) {  
		$resp = "Boa tarde";  
		
		}else if ($hr >= 5 && $hr <12 ){  
		$resp = "Bom dia";  
		
		}else if ($hr >= 0 && $hr <5 ){  
		$resp = "Boa madrugada";  
		
		}else{  
		$resp = "Boa noite";  
		}  
		
		$date = date("Y/m/d"); 
		if(substr(strftime("%A,%d",strtotime( $date )),0,3) == "ter"){
			$nome_dia = 'terça-feira de %B de %Y';
		}else
		if(substr(strftime("%A,%d",strtotime( $date )),2,4) == 'bado'){
			$nome_dia = 'Sábado, %d de %B de %Y';
		}else{
			$nome_dia = '%A, %d de %B de %Y';
		}
			echo '
<body>
	<div id="geral">
    <div id="data">
        	<p>'.$resp.', hoje é '.
			strftime($nome_dia, strtotime( $date )).'</p>'; 
		 
?>

        </div>
        <!-- inicio da barra de avisos -->
<div class="sucesso" style="display: <?php if ($this->session->flashdata('sucesso')) { echo "block"; } else { echo "none"; } ?>;">
    <?=@$this->session->flashdata('sucesso');?>
    </div>
    
    <div class="erro" style="display: <?php if ($this->session->flashdata('erro')) { echo "block"; } else { echo "none"; } ?>;">
      <?=@$this->session->flashdata('erro');?>
    </div>
    
    <div class="alerta" style="display: <?php if ($this->session->flashdata('alerta')) { echo "block"; } else { echo "none"; } ?>;">
      <?=@$this->session->flashdata('alerta');?>
</div>
<!-- final da barra de avisos -->
    	<div id="topo">
        	<div class="logo"><img src="<?=base_url(); ?>assets/imagens/backend/logo.png" width="243" height="80" alt="JWL"></div>
            <div class="dados">
<!--=============================================  PAINEL  =============================================--> 
				<?php     
            		if($this->session->userdata('nome_usuario')==''){
						echo '<p>Offline<img src="'.base_url().'assets/imagens/backend/offline.png" style="float:left;padding-right:3px;margin-top:7px;">';
					}else{
						echo '<p>Online:<img src="'.base_url().'assets/imagens/backend/online.png" style="float:left;padding-right:3px;margin-top:7px;">';
					}
				?>
                    	<span class="big"><?=$this->session->userdata('nome_usuario');?></span></p>
                    <ul class="menuTopo">
<!--==============================================  HOME  ==============================================-->
                    	<li><a href="<?=base_url()?>restrito/home">
                        <img src="<?=base_url()?>assets/imagens/backend/home.png" style="float:left;padding-right:3px;border:0px;">Home</a>
                        </li>
<!--===========================================  MEUS DADOS  ===========================================-->
                    	<li><a href="<?=base_url()?>restrito/usuarios/alterar">
                        <img src="<?=base_url()?>assets/imagens/backend/usuario.png" style="float:left;padding-right:3px;border:0px;">Meus Dados</a></li>
                  <!--  <li><a href="<?=base_url()?>restrito/configuracoes">Configurações</a></li> -->
                  
<!--==============================================  SAIR  ==============================================-->
                        <li><a href="<?=base_url()?>restrito/home/logout">
                        <img src="<?=base_url()?>assets/imagens/backend/sair.png" style="float:left;padding-right:3px;border:0px;">Sair</a>
                        </li>
                    </ul>
            </div>
      </div>
     
     <div id="topCconteudo"></div>
      <div id="conteudo">