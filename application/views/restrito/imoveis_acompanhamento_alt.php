
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Acompanhamento de Obra</h2>
  <h3>&nbsp;</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/acompanhamentos_alt'; ?>">
                <p>
                  <label for="pertencea"></label>
                  <br />
                  Item<br />
                  <label for="item"></label>
                  <input name="item" type="text" id="item" value="<?=$acompanhamentos[0]->item?>" />
</p>
                <p>Porcentagem (sem o de sinal %)<br />
  <label for="item"></label>
  <input name="porc" type="text" id="porc" value="<?=$acompanhamentos[0]->porc?>" />
                <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$acompanhamentos[0]->idimovel?>" />
                <input name="idacompanhamento" type="hidden" id="idacompanhamento" value="<?=$acompanhamentos[0]->idacompanhamento?>" />
                </p>
                <p>Ordem de Exibição<br />
                  <label for="item"></label>
                  <input name="ordem" type="text" id="ordem" value="<?=$acompanhamentos[0]->ordem?>" size="10" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Alterar Dados" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>