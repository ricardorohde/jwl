
<div id="principal">
              <h2>Notícias</h2>
              <h3>Nova Notícia</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/noticias/add'; ?>">
                <p>Titulo da Notícia<br />
                  <label for="titulo"></label>
                <input name="titulo" type="text" class="campotexto" id="titulo" size="50" />
                <br />
                  <label for="pertencea"></label>
                </p>
                <p>Conteúdo da Página<br />
                  <label for="texto"></label>
                 <textarea name="texto" id="texto" cols="45" rows="5"></textarea>
                   <?php echo display_ckeditor($ckeditor_texto); ?>
                </p>
                <p>Fonte<br />
                  <label for="fonte"></label>
                  <input type="text" class="campotexto" name="fonte" id="fonte" />
                </p>
                <p>Ativo no site?<br />
                  <label>
                    <input type="radio" name="ativo" value="s" id="ativo_0" />
                    Sim</label>
                  <br />
                  <label>
                    <input type="radio" name="ativo" value="n" id="ativo_1" />
                    Não</label>
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>

<br />
<div class="divisao_cadastro"></div>

  <h2>Notícias Já Cadastradas No sistema</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Data</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($noticias as $secao): ?>
                  <tr>
                    <td width="50%"><?=$secao->titulo; ?></td>
                    <td width="10%" align="center"><?=$secao->data; ?></td>
                    <td width="5%" align="center"><?=$secao->ativo; ?></td>
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/noticias/alterar/' . $secao->idnoticias; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/noticias/del/' . $secao->idnoticias; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Título</th>
                    <th>Data</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>