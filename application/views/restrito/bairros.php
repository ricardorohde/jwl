
<div id="principal">
              <h2>Bairros &raquo; Novo </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/bairros/add'; ?>">
                <p>Cidade<br />
                  <label for="estado"></label>
                  <label for="idestado"></label>
                  <select class="campotexto" name="idcidade" id="idcidade">
                   <option>Selecione</option>
                   			 <?php foreach ($cidades as $uf): ?>
		         	            <option value="<?=$uf->idcidade?>"><?=$uf->cidade?></option>
                  		      <? endforeach; ?>
                  </select>
                </p>
                <p>Nome do Bairro:<br />
                  <label for="bairro"></label>
                  <input class="campotexto" name="bairro" type="text" id="bairro" size="45" />
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
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($bairros as $secao): ?>
                  <tr>
                    <td width="10%" align="center"><?=$secao->cidade; ?></td>
                    <td width="43%"><?=$secao->bairro; ?></td>
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/bairros/alterar/' . $secao->idbairro; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/bairros/apagar/' . $secao->idbairro; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Cidade</th>
                    <th>Bairro</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>