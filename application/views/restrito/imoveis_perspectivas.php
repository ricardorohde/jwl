<div id="principal">
              <h2>Imóvel: <?=$nomeimovel?> - Fotos</h2>
  <h3>Nova Foto</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/perspectivas_add'; ?>">
                <p>
                Imagem do imóvel<br />
                  <label for="perspectiva"></label>
                  <input class="campotexto" type="text" name="perspectiva" id="perspectiva" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'perspectiva')"/>
                  <input name="idimovel" type="hidden" id="idimovel" value="<?=$retorno?>" />
                </p>
                <p>Legenda:<br />
                  <input class="campotexto" name="legenda" type="text" id="legenda" size="45" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>
<h2>Perspectivas Cadastradas</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Perspectiva</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($perspectivas as $secao): ?>
                  <tr>
                    <td width="10%" align="center"><img name="" src="<?=$secao->perspectiva; ?>" width="93" height="97" alt="<?=$secao->perspectiva; ?>" /></td>
                    <td width="41%"><?=$secao->legenda; ?></td>
                    <td width="5%" align="center">

                    <a href="<?php echo base_url() . 'restrito/imoveis/perspectivas_alterar/' . $secao->idperspectiva; ?>" title="Alterar Registro">
	            <img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a> 
                 
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/perspectivas_del/' . $secao->idperspectiva; ?>" title="Apagar Registro"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a>
                    
                    
                    
                    
                    
                    </td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Perspectiva</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>