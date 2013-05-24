
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Plantas &raquo; Alteração</h2>
<h3>Nova Planta</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/plantas_alt'; ?>">
                <p>Legenda<br />
                  <label for="legenda"></label>
                <input name="legenda" type="text" class="campotexto" id="legenda" value="<?=$planta[0]->legenda?>" size="50" />
                <br />
                  <label for="pertencea"></label>
                  <br />
                Imagem de Exibição<br />
                  <label for="planta"></label>
                  <input name="planta" type="text" id="planta" value="<?=$planta[0]->planta?>" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'planta')"/>
                  <input name="idimovel" type="hidden" id="idimovel" value="<?=$planta[0]->idimovel?>" />
                  <input name="idplanta" type="hidden" id="id" value="<?=$planta[0]->idplanta?>" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
  <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>