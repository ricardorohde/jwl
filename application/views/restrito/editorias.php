
<div id="principal">
              <h2>Texto Empresa </h2>
            <?php if ($ideditoria != 1) { ?>    
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/editorias/add'; ?>">
                <p>Titulo da Editoria<br />
                  <label for="titulo"></label>
                <input name="titulo" type="text" class="campotexto" id="titulo" size="50" />
                <input type="hidden" name="idsecao" id="idsecao" value="<?=$ideditoria; ?>" />
                <br />
                  <label for="pertencea"></label>
                </p>
                <p>Conteúdo da Página<br />
                  <label for="cont"></label>
                  <textarea name="cont" id="cont" cols="45" rows="5"></textarea>
                   <?php echo display_ckeditor($ckeditor_cont); ?>
                </p>
                <p>Meta-tags<br />
                  <textarea name="metatags" id="metatags" cols="45" rows="5"></textarea>
                </p>
                <p>Palavras-chave<br />
                  <textarea name="keywords" id="keywords" cols="45" rows="5"></textarea>
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
<?php } ?>
  <h2> Já Cadastradas No sistema</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Data</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($editorias as $secao): ?>
                  <tr>
                    <td width="10%" align="center"><?=$secao->titulo; ?></td>
                    <td width="50%"><?=$secao->conteudo; ?></td>
                    <td width="10%" align="center"><?=$secao->data; ?></td>
                    <td width="10%" align="center"><?=$secao->ativo; ?></td>
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/editorias/alterar/' . $secao->id; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                  
                
                    
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Título</th>
                    <th>Texto</th>
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