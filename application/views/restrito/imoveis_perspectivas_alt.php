
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Perspectivas &raquo; Alteração</h2>
<h3>&nbsp;</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/perspectivas_alt'; ?>">
                <p>
                  <label for="pertencea"></label>
                  <br />
                Imagem de Exibição<br />
                  <label for="planta"></label>
                  <input name="perspectiva" type="text" id="perspectiva" value="<?=$perspectiva[0]->perspectiva?>" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'perspectiva')"/>
                  <input name="idimovel" type="hidden" id="idimovel" value="<?=$perspectiva[0]->idimovel?>" />
                  <input name="idperspectiva" type="hidden" id="id" value="<?=$perspectiva[0]->idperspectiva?>" />
                </p>
                <p>Legenda:<br />
                  <input name="legenda" type="text" id="legenda" size="45" value="<?=$perspectiva[0]->legenda?>"/>
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
  <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>