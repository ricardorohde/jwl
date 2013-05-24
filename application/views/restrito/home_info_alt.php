<script type="text/javascript">
function Mascara(objeto){
   if(objeto.value.length == 0 || objeto.value == "")
     objeto.value = '(' + objeto.value;

   if(objeto.value.length == 3)
      objeto.value = objeto.value + ')';

 if(objeto.value.length == 8)
     objeto.value = objeto.value + '-';
}

function limpa() {
if(document.getElementById('tel_home').value!="") {
document.getElementById('tel_home').value="";
document.getElementById("tel_home").focus(); 
}
}
</script>
<div id="principal">
              <h2>Alterar dados da home page</h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/home_info/alt'; ?>">
                <input type="hidden" name="idsecao" id="idsecao" value="<?=$home_info[0]->id;?>" />
                
                
                <p>Texto no topo do site<br />
                <textarea name="texto_saudacao" id="texto_saudacao" class="campotexto">
                <?=$home_info[0]->texto_saudacao;?></textarea>
                </p>
                
                <p>Telefone<br />
                <input type="text" name="tel_home" id="tel_home" class="campotexto" 
                value="<?=$home_info[0]->tel_home;?>" maxlength="13"  onkeypress="Mascara(this);">
                
              <input type="button" id="limpa_input" onClick="limpa()">

<!--                <input name="tel_home" id="tel_home" type="text" class="campotexto"
                	value="<?=$home_info[0]->tel_home;?>" size="50" />-->
                </p>

				<p>Quantidade de imoveis que aparece em destaques na Home<br />
                <input name="qnt_destaque" id="qnt_destaque" type="text" class="campotexto" 
                	value="<?=$home_info[0]->qnt_destaque;?>" size="50" />
                </p>

                <p>E-mail<br />
                <input name="email_home" id="email_home" type="text" class="campotexto" 
                	value="<?=$home_info[0]->email_home;?>" size="50" />
                </p>

                <p>Endereco<br />
                <textarea name="endereco_home" id="endereco_home" class="campotexto">
                <?=$home_info[0]->endereco_home;?></textarea>
                </p>

                <p>Facebook<br />
                <input name="facebook" id="facebook" type="text" class="campotexto" 
                	value="<?=$home_info[0]->facebook;?>" size="50" />
                </p>

                <p>Twitter<br />
                <input name="twitter" id="twitter" type="text" class="campotexto" 
                	value="<?=$home_info[0]->twitter;?>" size="50" />
                </p>

                <p>Youtube<br />
                <input name="youtube" id="youtube" type="text" class="campotexto" 
                	value="<?=$home_info[0]->youtube;?>" size="50" />
                </p>

                <p>Skype - Informe todos os skypes, caso nao tenha nenhum deixe em branco.<br />
                ** para pular linha escreva 2x < br> ** <br />
                <textarea name="skype" id="skype" type="text" class="campotexto">
				<?=$home_info[0]->skype;?></textarea>
                </p>

                <p>Codigo do Mapa<br />
                <textarea name="mapa_home" id="mapa_home" class="campotexto">
                	<?=$home_info[0]->mapa_home;?></textarea>
                </p>
                
                  <input type="submit" name="button" id="button" value="Alterar Dados" class="botao" />
                </p>
              </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>