
<div id="principal">
              <h2>Alterando valores do Indice</h2>
              <h3>&nbsp;</h3>
              <blockquote>
                <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/indices/alt'; ?>">
                  <table width="590" border="1" align="center" cellpadding="5" cellspacing="1">
                    <tr>
                      <td width="29" rowspan="2" align="center" bgcolor="#FFFFFF">Ano</td>
                      <td width="30" rowspan="2" align="center" bgcolor="#FFFFFF">Mês</td>
                      <td colspan="2" bgcolor="#FFFFFF" align="center">CUB ES</td>
                      <td bgcolor="#FFFFFF" width="52" align="center">IGPM</td>
                      <td bgcolor="#FFFFFF" width="67" align="center">TR</td>
                      <td bgcolor="#FFFFFF" width="67" align="center">Poupança</td>
                      <td bgcolor="#FFFFFF" width="47" align="center">IPCA</td>
                     
                    </tr>
                    <tr>
                      <td width="56" align="center" bgcolor="#FFFFFF">Var. %</td>
                      <td width="56" align="center" bgcolor="#FFFFFF">Valor R$</td>
                      <td bgcolor="#FFFFFF" align="center">Var. %</td>
                      <td bgcolor="#FFFFFF" align="center">Var. %</td>
                      <td bgcolor="#FFFFFF" align="center">Var. %</td>
                      <td bgcolor="#FFFFFF" align="center">Var. %</td>
                    </tr>
                    <?php foreach($indices as $ind): ?>
                    <tr>
                 <td bgcolor="#FFFFFF" align="center">
                   <input name="ano" type="text" id="ano" value="<?=$ind->ano?>" size="6" /> </td>
         <td bgcolor="#FFFFFF" align="center"><input name="mes" type="text" id="mes" value="<?=$ind->mes?>" size="6" /></td>
         <td bgcolor="#FFFFFF" align="center"><input name="cubvar" type="text" id="cubvar" value="<?=$ind->cubvar?>" size="6" /></td>
         <td bgcolor="#FFFFFF" align="center"><input name="cubval" type="text" id="cubval" value="<?=$ind->cubval?>" size="6" /></td>
         <td bgcolor="#FFFFFF" align="center"><input name="igpmvar" type="text" id="igpmvar" value="<?=$ind->igpmvar?>" size="6" /></td>
         <td bgcolor="#FFFFFF" align="center"><input name="trvar" type="text" id="trvar" value="<?=$ind->trvar?>" size="6" /></td>
         <td bgcolor="#FFFFFF" align="center"><input name="poupvar" type="text" id="poupvar" value="<?=$ind->poupvar?>" size="6" /></td>
         <td bgcolor="#FFFFFF" align="center"><input name="ipcavar" type="text" id="ipcavar" value="<?=$ind->ipcavar?>" size="6" />                       </td>
                     
                    </tr>
                    <tr>
                      <td colspan="8" bgcolor="#FFFFFF" align="center"><input name="id" type="hidden" id="id" value="<?=$ind->id?>" />                        <input type="submit" name="button" id="button" value="Alterar Dados" class="botao" /></td>
                    
                    </tr>
                    <?php endforeach; ?>
                  </table>
                  </form>
  </blockquote>
  <h2>&nbsp;</h2>
</div>
			<!-- espaço -->
             <div class="spacer"></div>