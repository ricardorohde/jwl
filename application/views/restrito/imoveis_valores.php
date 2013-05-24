
<div id="principal">
              <h2>Imóvel: <?=$valores[0]->nome?> - Valor</h2>
  <h3>Valor do Imóvel.</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/valores_alt'; ?>">
                <p>Texto para pagina valor<br />
                  <label for="txt_valor"></label>
                  <textarea name="txt_valor" type="text" class="campotexto" id="txt_valor">
				  	<?=$valores[0]->txt_valor; ?></textarea>
                  
                <p>Valor do imóvel<br />
                  <label for="valores"></label>
                  R$:<input name="valores" type="text" class="campotexto" id="valores" value="<?=$valores[0]->valores; ?>"/>
                <br />
                Banner pagina valor<br />
                  <label for="perspectiva"></label>
                  <input class="campotexto" type="text" name="banner_valor" id="banner_valor" value="<?=$valores[0]->banner_valor?>" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'banner_valor')"/>
                
                  <label for="pertencea"></label>
                  <br />
                  <label for="googlemaps"></label>
                  <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$valores[0]->idimoveis;?>" />
                  <br />
                  <input type="submit" name="button" id="button" value="Alterar Valor" class="botao" />
                </p>
</form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>