
<div id="principal">
              <h2>Indices de <?=$ano?></h2>
              <h3>Listagem de índices</h3>
              <p><a href="<?=base_url()?>restrito/indices">Novo Índice</a></p>
              <table width="590" border="1" align="center" cellpadding="5" cellspacing="1">
                <tr>
                  <td width="29" rowspan="2" align="center" bgcolor="#FFFFFF">Ano</td>
                  <td width="30" rowspan="2" align="center" bgcolor="#FFFFFF">Mês</td>
                  <td colspan="2" bgcolor="#FFFFFF" align="center">CUB ES</td>
                  <td bgcolor="#FFFFFF" width="52" align="center">IGPM</td>
                  <td bgcolor="#FFFFFF" width="67" align="center">TR</td>
                  <td bgcolor="#FFFFFF" width="67" align="center">Poupança</td>
                  <td bgcolor="#FFFFFF" width="47" align="center">IPCA</td>
                  <td width="66" rowspan="2" align="center" bgcolor="#FFFFFF">Opções</td>
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
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->ano?></td>
                  <td bgcolor="#FFFFFF" align="center">
                    <?=$ind->mes?></td>
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->cubvar?></td>
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->cubval?></td>
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->igpmvar?></td>
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->trvar?></td>
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->poupvar?></td>
                  <td bgcolor="#FFFFFF" align="center"><?=$ind->ipcavar?></td>
                  <td bgcolor="#FFFFFF" align="center">
                  <a href="<?=base_url() . 'restrito/indices/alterar/' . $ind->id; ?>"><img src="<?=base_url()?>assets/imagens/backend/edit.png" width="16" height="16" alt="Alterar Dados" /></a> | 
                  <a href="<?=base_url() . 'restrito/indices/delmes/' . $ind->id; ?>"><img src="<?=base_url()?>assets/imagens/backend/delete.png" width="16" height="16" alt="Apagar Registro" /></a></td>
                </tr>
                <?php endforeach; ?>
               
              </table>
  <h2>&nbsp;</h2>
</div>
			<!-- espaço -->
             <div class="spacer"></div>