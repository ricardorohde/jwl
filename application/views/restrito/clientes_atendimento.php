
<div id="principal">
              <h2><?=$secao?> &raquo; Exibição</h2>
              <form id="form1" name="form1" method="post" action="<?=base_url() . 'restrito/clientes/listar';?>">
                Selecione o tipo que deseja visualizar: 
                <label for="tipocli"></label>
                <select name="tipocli" id="tipocli">
                  <option value="tudo" selected="selected">Todos</option>
                  <option value="agende">Agende uma visita</option>
                  <option value="assistencia">Assistência Técnica</option>
                  <option value="atendimento">Atendimento ao Cliente</option>
                  <option value="contato">Contato</option>
                  <option value="ligamos">Ligamos para você</option>
                </select>
                <input type="submit" name="button" id="button" value="Filtrar" />
              </form>
              <p>&nbsp;</p>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
  <thead>
                  <tr>
                    <th>Acesso</th>
                    <th>Nome</th>
                    <th>Telefone/Celular</th>
                    <th>E-mail</th>
                    <th>Encaminhar para:</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($cadastros as $secao): ?>
                  <tr>
                    <td width="11%" align="center"><?=$secao->acesso; ?></td>
                    <td width="23%"><?=$secao->nome; ?></td>
                    <td width="15%" align="center"><?=$secao->telefone . '/' . $secao->celular; ?></td>
                    <td width="27%" align="center"><?=$secao->email; ?></td>
                    <td width="17%" align="center"><?=$secao->depto; ?></td>
                    <td width="7%">
                    <a href="<?php echo base_url() . 'restrito/clientes/ver/' . $secao->id; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/clientes/apagar/' . $secao->id; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Acesso</th>
                    <th>Nome</th>
                    <th>Telefone/Celular</th>                   
                    <th>E-mail</th>
                    <th>Encaminhar para:</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
</table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>