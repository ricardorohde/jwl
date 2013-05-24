
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Lazer e Serviços &raquo; Alteração</h2>
<h3>Nova Lazer/Serviço</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/servicos_alt'; ?>">
                <p>Item<br />
                  <label for="servico"></label>
                <input name="servico" type="text" class="campotexto" id="servico" value="<?=$servico[0]->servico?>" size="50" />
                <br />
                  <label for="pertencea"></label>
                  <br />
                Imagem de Exibição<br />
                  <label for="imagem"></label>
                  <input name="imagem" type="text" id="imagem" value="<?=$servico[0]->imagem?>" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>
                  <input name="idimovel" type="hidden" id="idimovel" value="<?=$servico[0]->idimovel?>" />
                  <input name="idservico" type="hidden" id="id" value="<?=$servico[0]->idservico?>" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
  <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>