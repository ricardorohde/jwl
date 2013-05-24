
<div id="principal">
              <h2>Estados &raquo; Alteração </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/estados/alt'; ?>">
                <p>Nome <br />
                  <label for="estado"></label>
                <input name="estado" type="text" class="campotexto" id="estado" value="<?=$estados[0]->estado;?>" size="50" />
                <input name="idestado" type="hidden" id="idestado" value="<?=$estados[0]->idestado;?>" />
                <br />
<br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
</form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>