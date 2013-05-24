
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Acompanhamento de Obra</h2>
  <h3><a href="<?=base_url()?>restrito/imoveis/acompanhamento_fotos/<?=$retorno?>"><img src="<?=base_url()?>assets/imagens/frontend/add_foto.png" alt=""/></a></h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/acompanhamentos_add'; ?>">
                <p>
                  <label for="pertencea"></label>
                  <br />
                  Item<br />
                  <label for="item"></label>
                  <input type="text" name="item" id="item" />
</p>
                <p>Porcentagem (sem o de sinal %)<br />
  <label for="item"></label>
  <input type="text" name="porc" id="porc" />
                <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$retorno?>" />
                </p>
                <p>Ordem de Exibição<br />
                  <label for="item"></label>
                  <input name="ordem" type="text" id="ordem" size="10" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>
<h2>Andamento da Obra</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Porcentagem</th>
                    <th>Ordem</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($acompanhamentos as $secao): ?>
                  <tr>
                    <td width="39%"><?=$secao->item?></td>
                    <td width="18%"><?=$secao->porc?></td>
                    <td width="13%"><?=$secao->ordem?></td>
                    <td width="30%">
                    
                <a href="<?php echo base_url() . 'restrito/imoveis/acompanhamentos_alterar/' . $secao->idacompanhamento; ?>">
	            <img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a> 
                 
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/acompanhamentos_del/' . $secao->idacompanhamento; ?>"><img src="<?=base_url();?>assets/imagens/icons/cross.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Item</th>
                    <th>Porcentagem</th>
                    <th>Ordem</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>