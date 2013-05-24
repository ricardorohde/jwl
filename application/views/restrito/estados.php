
<div id="principal">
              <h2>Estados</h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/estados/add'; ?>">
                <p>Nome do Estado<br />
                  <label for="estado"></label>
                <input name="estado" type="text" class="campotexto" id="estado" size="50" />
                </p>
                <p>
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>

<br />
<div class="divisao_cadastro"></div>

  <h2> Já Cadastrados No sistema</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>UF</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($estados as $secao): ?>
                  <tr>
                    <td width="40%"><?=$secao->estado; ?></td>
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/estados/alterar/' . $secao->idestado; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/estados/apagar/' . $secao->idestado; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>UF</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>