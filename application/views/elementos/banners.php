<!-- pop up index --
<div id="popupa">
<a id="fechapopup" href="#">Fechar</a>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="400" height="300">
<param name="movie" id="movie" value="http://www.metronengenharia.com.br/banner_lancamentos_18062012.swf">
<embed id="movie" name="movie" src="http://www.metronengenharia.com.br/banner_lancamentos_18062012.swf" 
pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
 type="application/x-shockwave-flash" width="400" height="300"></embed>
 </object>

<!-- <h4>Cadastra-se para receber informações sobre os futuros <br>
lançamentos Jardim Camburi 1, 2 e 3 quartos E Laranjeiras 2 quartos</h4>

<br>

<form name='popup_inicial' method="post" id="form_popup">
	<div style='width:95%; margin-right:10px;'>
	<table>
		<tr>
			<td>Nome: <br> <input type='text' name='nome' size='70'></td>
		</tr>
		<tr>
			<td>Telefone: <br> <input type='text' name='telefone' id='telefone' size='70'></td>
		</tr>
		<tr>
			<td>E-mail: <br> <input type='text' name='email' size='70'></td>
		</tr>
		<tr>
			<td>Empreendimento: <br> <input type='text' name='emp_ini' size='70'></td>
		</tr>
		<tr>
			<td>Mensagem: <br> <textarea cols='57' name='comentario' rows='3'></textarea></td>
		</tr>								
	</table>
	</div>
	<br>
		<div align='right' style='margin:0px 50px 0px 0px;'><button type='submit' name='btn_pop'>Cadastrar</button></div>
</form> 


</div>
-->



	<div id="banner"> 
  		<?php foreach ($banners as $banner): ?>
	       <a href="<?=$banner->link;?>"><img src="<?=$banner->arte;?>" width="1048" height="300" alt="<?=$banner->titulo;?>" /> </a>
        <? endforeach; ?>
  	</div>

