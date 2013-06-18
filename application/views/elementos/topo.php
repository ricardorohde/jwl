
<div id="topo">
        <?php
			$pSQL = $this->db->query('SELECT * FROM home_info');
		foreach ($pSQL->result_array() as $row){
		   $texto_saudacao = $row['texto_saudacao'];
		   $tel_home = $row['tel_home'];
		   $email_home = $row['email_home'];
		   $endereco_home = $row['endereco_home'];
		   $facebook = $row['facebook'];
		   $twitter = $row['twitter'];
		   $youtube = $row['youtube'];
		   $skype = $row['skype'];
		   $mapa_home = $row['mapa_home'];
		} 
		$tel_withfout = explode(' ',$tel_home);
		 ?>

<!--CORRETOR ON LINE LATERAL--
	<div style="top: 212px;" class="abaScroll" id="abaLateral">
    	<div id="" style="display: block;">
    		<<a href="javascript:void(window.open('http://www.atendimentoon.com.br/metron/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" title="Corretor online" class="barra_corretor">Corretor On-line</a>
            <a title="Manter fixo" class="btnTopo" id="btnFixar" style="display: block;" onclick="fix('btnFixar'); createCookie('bbkrCookie','abaNoScroll',3)" href="javascript:void(0)">Manter Fixo</a>
            <a title="Destravar" class="btnTopo" id="btnDestravar" style="display: none;" onclick="fix('btnDestravar'); eraseCookie('bbkrCookie')" href="javascript:void(0)">Destravar</a>   
    	</div>
    </div>
<!--FIM CORRETOR ON LINE LATERAL-->


    <a href="<?=base_url()?>"style="float:left;margin-left:57px">
    	<img src="<?=base_url()?>/assets/imagens/frontend/logo_jwl.png"/>
    </a>


<div id="atendimento">
	<p id="tel_topo">Tel:<?=$tel_withfout[0]?></p>
    <a href="mailto:<?=$email_home?>">
    	<p id="email_topo"><img src="<?=base_url()?>assets/imagens/frontend/email.png" alt=""/><?=$email_home?></p>
	</a>
</div>
<!--========================================  LIGAMOS PARA VOCE ==================================
    <div id="botoes-topo">
     
      <ul id="botoes_topo">
       
        <li><a href="<?=base_url();?>clientes/ligamos">Ligamos para você!</a></li>
        <li><a href="<?=base_url();?>clientes/visitas">Agende</a></li>
        <li><a href="<?=base_url();?>clientes/vendas">Vendas</a></li>
        
        
<!--        <li id="atendonline">
        
        <a href="javascript:void(window.open('http://www.atendimentoon.com.br/metron/chat.php','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))"><img src="<?=base_url();?>assets/imagens/frontend/atendon.png" width="122" height="59" alt="Atendimento Online" /></a> -->
        
<!--        <img src="http://www.atendimentoon.com.br/metron/image.php?id=04&amp;type=inlay" width="90" height="36" border="0" alt="LiveZilla Live Help" /> 
        
        
        </li>

      </ul>
      
    </div>
========================================  LIGAMOS PARA VOCE ==================================-->
    <div id="menus">
<ul id="nav2">
<!--===============================  MENU 1  ====================================-->
	<li class="top"><a href="<?=base_url()?>empresa" class="top_link"><span>Empresa</span></a></li>
    
<!--===============================  MENU 2  ====================================-->
	<li class="top"><a href="<?=base_url()?>imoveis" id="products" class="top_link"><span class="down">Imóveis</span></a>
		<ul class="sub_dropdown">
<!--===============================  SUB 1  =================-->
			<li><a href="<?=base_url()?>imoveis/apartamentos" class="fly">Apartamento</a>
					<ul>
						<li><a href="<?=base_url()?>imoveis/apartamento_1qt">1 Quarto</a></li>
						<li><a href="<?=base_url()?>imoveis/apartamento_2qt">2 Quartos</a></li>
						<li><a href="<?=base_url()?>imoveis/apartamento_3qt">3 Quartos</a></li>
						<li><a href="<?=base_url()?>imoveis/apartamento_4qt">4 Quartos</a></li>
         				<li><a href="<?=base_url()?>imoveis/apartamento_5qt">Mais de 4 Quartos</a></li>
					</ul>
			</li>
            
<!--===============================  SUB 2  ================-->
			<li><a href="<?=base_url()?>imoveis/casa" class="fly">Casa</a>
					<ul>
						<li><a href="<?=base_url()?>imoveis/casa_1qt">1 Quarto</a></li>
						<li><a href="<?=base_url()?>imoveis/casa_2qt">2 Quartos</a></li>
						<li><a href="<?=base_url()?>imoveis/casa_3qt">3 Quartos</a></li>
						<li><a href="<?=base_url()?>imoveis/casa_4qt">4 Quartos</a></li>
         				<li><a href="<?=base_url()?>imoveis/casa_5qt">Mais de 4 Quartos</a></li>
					</ul>
			</li>
<!--===============================  SUB 3  ================-->
			<li><a href="<?=base_url()?>imoveis/kitnet" class="fly">Kitnet</a>
					<ul>
						<li><a href="<?=base_url()?>imoveis/kitnet_1qt">1 Quarto</a></li>
						<li><a href="<?=base_url()?>imoveis/kitnet_2qt">2 Quartos</a></li>
						<li><a href="<?=base_url()?>imoveis/kitnet_3qt">3 Quartos</a></li>
						<li><a href="<?=base_url()?>imoveis/kitnet_4qt">4 Quartos</a></li>
         				<li><a href="<?=base_url()?>imoveis/kitnet_5qt">Mais de 4 Quartos</a></li>
					</ul>
			</li>
            
            
            
		</ul>
	</li>
    
<!--===============================  MENU 3  ====================================-->
	<li class="top"><a href="<?=base_url()?>imoveis/aluguel" id="shop" class="top_link"><span class="down">Aluguel</span></a>
		<ul class="sub_dropdown">
			<li><a href="<?=base_url()?>imoveis/aluguel_apartamento">Apartamento</a></li>
			<li><a href="<?=base_url()?>imoveis/aluguel_casa">Casa</a></li>
			<li><a href="<?=base_url()?>imoveis/aluguel_kitnet">Kitnet</a></li>
		</ul>
	</li>
    
<!--===============================  MENU 4  ====================================-->
	<li class="top"><a href="<?=base_url()?>imoveis/compra" id="contacts" class="top_link"><span class="down">Comprar</span></a>
		<ul class="sub_dropdown">
			<li><a href="<?=base_url()?>imoveis/compra_apartamento">Apartamento</a></li>
			<li><a href="<?=base_url()?>imoveis/compra_casa">Casa</a></li>
			<li><a href="<?=base_url()?>imoveis/compra_kitnet">Kitnet</a></li>
		</ul>
	</li>

<!--===============================  MENU 5  ====================================-->
	<li class="top"><a href="<?=base_url()?>imoveis/financiamento" id="contacts" class="top_link"><span class="down">Financiamento</span></a>
		<ul class="sub_dropdown">
			<li><a href="<?=base_url()?>imoveis/financiamento_apartamento">Apartamento</a></li>
			<li><a href="<?=base_url()?>imoveis/financiamento_casa">Casa</a></li>
			<li><a href="<?=base_url()?>imoveis/financiamento_kitnet">Kitnet</a></li>
		</ul>
	</li>
    
<!--===============================  MENU 6  ====================================-->
    	<li class="top"><a href="#" id="services" class="top_link"><span>Serviços</span></a></li>


</ul>
      
      <div id="mensagem_dia">
      
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
		echo '<p id="data_atual">'.$resp.', hoje é '.
		strftime($nome_dia, strtotime( $date )).'</p>';
		?>
        
		<script type="text/javascript">
        
        var digital = new Date(); // crio um objeto date do javascript
        //digital.setHours(15,59,56); // caso não queira testar com o php, comente a linha abaixo e descomente essa
        digital.setHours(<?php echo date("H,i,s"); ?>); // seto a hora usando a hora do servidor
        <!--
        function clock() {
        var hours = digital.getHours();
        var minutes = digital.getMinutes();
        var seconds = digital.getSeconds();
        digital.setSeconds( seconds+1 ); // aquin que faz a mágica
        
        
        // acrescento zero
        if (minutes <= 9) minutes = "0" + minutes;
        if (seconds <= 9) seconds = "0" + seconds;
        
        dispTime = hours + ":" + minutes + ":" + seconds;
        document.getElementById("clock_dinamic").innerHTML = dispTime; // coloquei este div apenas para exemplo
        setTimeout("clock()", 1000); // chamo a função a cada 1 segundo
        
        }
        
        window.onload = clock;
        //-->
        
        </script>
        <p id="clock_dinamic"></p>
        
        
      </div>
      
      <div id="text_saudacao">
      	<?=$texto_saudacao?>
      </div>
      
      
      
      
<!--==========================================-->      
      <script type="text/javascript">
      function Redireciona(obj)
		{
		var src = "<?=base_url()?>home/val_imovel?val_imovel="+obj.value;
		location.href = src;
		}
</script>

          <select name="val_imovel" id="val_imovel" onchange="Redireciona(this)">
            <option value="0">Escolha um valor de imovel</option>
            <option value="500">Até 300 mil</option>
            <option value="700">De 300 mil á 500 mil</option>
            <option value="1000">De 500 mil 700 mil</option>
            <option value="1500">Mais de 1 milhao</option>
          </select>
<!--==========================================-->
      
      
      <div id="buscamenu">      
        <form id="buscatopo" name="buscatopo" action="<?=base_url()?>home/procurar" method="post">
          <input name="procura" type="text" id="procura" style="color:#666;" onfocus="if(this.value == 'Buscar Imovel') { this.value = ''}" onblur="if(this.value == '') { this.value = 'Buscar Imovel'}" value="Buscar Imovel" />
          <input type="submit" name="procurabtn" id="procurabtn" value="OK" />
        </form>
      </div>
    </div>
  </div>