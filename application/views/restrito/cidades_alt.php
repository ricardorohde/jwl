
<div id="principal">
              <h2>Cidades &raquo; Alteração </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/cidades/alt'; ?>">
                <p>Estado<br />
                  <label for="estado2"></label>
                  <label for="idestado"></label>
                  <select name="idestado" id="idestado">
                    <option>Selecione</option>
                    <?php foreach ($estados as $uf): ?>
		                     <option value="<?=$uf->idestado?>" <?php if ($uf->idestado == $cidades[0]->iduf) { echo 'selected="selected"'; } ?>><?=$uf->estado?></option>
                     <? endforeach; ?>
                  </select>
                </p>
                <p>Cidade<br />
                  <label for="cidade"></label>
                <input name="cidade" type="text" class="campotexto" id="cidade" value="<?=$cidades[0]->cidade;?>" size="50" />
                <input name="idcidade" type="hidden" id="idcidade" value="<?=$cidades[0]->idcidade;?>" />
                <br />
<br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>