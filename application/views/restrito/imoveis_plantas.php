
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Plantas</h2>
  <h3>Nova Planta</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/plantas_add'; ?>">
                <p>Legenda<br />
                  <label for="legenda"></label>
                <input name="legenda" type="text" class="campotexto" id="legenda" size="50" />
                <br />
                  <label for="pertencea"></label>
                  <br />
                Imagem de Exibição<br />
                  <label for="planta"></label>
                  <input type="text" name="planta" id="planta" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'planta')"/>
                  <input name="idimovel" type="hidden" id="idimovel" value="<?=$retorno?>" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>
<h2>Plantas Cadastradas</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Planta</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($plantas as $secao): ?>
                  <tr>
                    <td width="18%"><img name="" src="<?=$secao->planta; ?>" width="93" height="97" alt="<?=$secao->planta; ?>" /></td>
                    <td width="68%" align="center"><?=$secao->legenda; ?></td>
                    <td width="14%">
                    
                <a href="<?php echo base_url() . 'restrito/imoveis/plantas_alterar/' . $secao->idplanta; ?>">
	            <img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a> 
                 
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/plantas_del/' . $secao->idplanta; ?>"><img src="<?=base_url();?>assets/imagens/icons/cross.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Planta</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>