
<div id="principal">
              <h2>Cidades &raquo; Novo </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/cidades/add'; ?>">
                <p>Estado<br />
                  <label for="estado"></label>
                  <label for="idestado"></label>
                  <select class="campotexto" name="idestado" id="idestado">
                   <option>Selecione</option>
                   			 <?php foreach ($estados as $uf): ?>
		         	            <option value="<?=$uf->idestado?>"><?=$uf->estado?></option>
                  		      <? endforeach; ?>
                  </select>
                </p>
                <p>Nome da Cidade:<br />
                  <label for="cidade"></label>
                  <input name="cidade" class="campotexto" type="text" id="cidade" size="45" />
                  <br />
                  <br />
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
                    <th>Cidade</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($cidades as $secao): ?>
                  <tr>
                    <td width="10%" align="center"><?=$secao->estado; ?></td>
                    <td width="43%"><?=$secao->cidade; ?></td>
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/cidades/alterar/' . $secao->idcidade; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/cidades/apagar/' . $secao->idcidade; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>UF</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>