
<div id="principal">
              <h2>Imóvel: <?=$valores[0]->nome?> - Link de Acesso ao site</h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/sites_alt'; ?>">
                <p>Coloque o link de acesso ao site da obra<br />
                  <label for="acesse"></label>
                  <input name="acesse" type="text" class="campotexto" id="acesse" value="<?=$valores[0]->acesse; ?>" />
                <br />
                  <label for="pertencea"></label>
                  <br />
                  <label for="googlemaps"></label>
                  <input class="campotexto" name="idimoveis" type="hidden" id="idimoveis" value="<?=$valores[0]->idimoveis;?>" />
                  <br />
                  <input type="submit" name="button" id="button" value="Registrar" class="botao" />
                </p>
</form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>