
<div id="principal">
              <h2>Indices</h2>
              <h3>Novos Índices</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/indices/add'; ?>">
                <table width="480" border="1" align="center" cellpadding="5" cellspacing="1">
                  <tr>
                    <td width="30" rowspan="2" align="center" bgcolor="#FFFFFF">Ano</td>
                    <td width="30" rowspan="2" align="center" bgcolor="#FFFFFF">Mês</td>
                    <td colspan="2" bgcolor="#FFFFFF" align="center">CUB ES</td>
                    <td bgcolor="#FFFFFF" width="72" align="center">IGPM</td>
                    <td bgcolor="#FFFFFF" width="62" align="center">TR</td>
                    <td bgcolor="#FFFFFF" width="82" align="center">Poupança</td>
                    <td bgcolor="#FFFFFF" width="189" align="center">IPCA</td>
                  </tr>
                  <tr>
                    <td width="44" align="center" bgcolor="#FFFFFF">Var. %</td>
                    <td width="56" align="center" bgcolor="#FFFFFF">Valor R$</td>
                    <td bgcolor="#FFFFFF" align="center">Var. %</td>
                    <td bgcolor="#FFFFFF" align="center">Var. %</td>
                    <td bgcolor="#FFFFFF" align="center">Var. %</td>
                    <td bgcolor="#FFFFFF" align="center">Var. %</td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFFFFF" align="center"><input name="ano" type="text" id="ano" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><label for="mes"></label>
                    <input name="mes" type="text" id="mes" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><input name="cubvar" type="text" id="cubvar" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><input name="cubval" type="text" id="cubval" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><input name="igpmvar" type="text" id="igpmvar" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><input name="trvar" type="text" id="trvar" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><input name="poupvar" type="text" id="poupvar" size="5" /></td>
                    <td bgcolor="#FFFFFF" align="center"><input name="ipcavar" type="text" id="ipcavar" size="5" /></td>
                  </tr>
                  <tr>
                    <td colspan="8" align="center" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Cadastrar" class="botao" /></td>
                    
                  </tr>
                </table>
  </form>
  <h2> Já Cadastradas No sistema</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Ano</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($anos as $secao): ?>
                  <tr>
                    <td width="50%"><?=$secao->ano; ?></td>
                    <td width="10%">
                    <a href="<?php echo base_url() . 'restrito/indices/abrir/' . $secao->ano; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/indices/delano/' . $secao->ano; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Título</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>