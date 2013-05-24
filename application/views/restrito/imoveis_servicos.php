
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Lazer e Serviços</h2>
  <h3>Novo Serviço</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/servicos_add'; ?>">
                <p>Servico<br />
                  <label for="servico"></label>
                <input name="servico" type="text" class="campotexto" id="servico" size="50" />
                <br />
                  <label for="pertencea"></label>
                  <br />
                Imagem de Exibição<br />
                  <label for="imagem"></label>
                  <input type="text" name="imagem" id="imagem" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>
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
                    <th>Imagem</th>
                    <th>Serviço</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($servicos as $secao): ?>
                  <tr>
                    <td width="18%"><img name="" src="<?=$secao->imagem; ?>" width="93" height="97" alt="<?=$secao->servico; ?>" /></td>
                    <td width="68%" align="center"><?=$secao->servico; ?></td>
                    <td width="14%">
                    
                <a href="<?php echo base_url() . 'restrito/imoveis/servicos_alterar/' . $secao->idservico; ?>">
	            <img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a> 
                 
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/servicos_del/' . $secao->idservico; ?>"><img src="<?=base_url();?>assets/imagens/icons/cross.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Imagem</th>
                    <th>Serviço</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>