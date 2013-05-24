
<div id="principal">
              <h2>Bairros &raquo; Alteração </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/bairros/alt'; ?>">
                <p>Cidade<br />
                  <label for="estado2"></label>
                  <label for="idcidade"></label>
                  <select name="idcidade" id="idcidade">
                    <option>Selecione</option>
                    <?php foreach ($cidades as $uf): ?>
		                     <option value="<?=$uf->idcidade?>" <?php if ($uf->idcidade == $bairros[0]->idcidade) { echo 'selected="selected"'; } ?>><?=$uf->cidade?></option>
                     <? endforeach; ?>
                  </select>
                </p>
                <p>Bairro<br />
                  <label for="bairro"></label>
                <input name="bairro" type="text" class="campotexto" id="bairro" value="<?=$bairros[0]->bairro;?>" size="50" />
                <input name="idbairro" type="hidden" id="idbairro" value="<?=$bairros[0]->idbairro;?>" />
                <br />
<br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>