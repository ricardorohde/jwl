
<div id="principal">
              <h2>Banners</h2>
              <h3>Novo Banner</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/banners/add'; ?>">
                <p>Titulo do Banner<br />
                  <label for="titulo"></label>
                <input name="titulo" type="text" class="campotexto" id="titulo" size="50" />
                
                  <label for="pertencea"></label>
                </p>
                <p>                  Link do Banner<br />
                  <label for="link"></label>
                 <input name="link" class="campotexto" type="text" id="link" value="" size="50" />
                   </p>
                <p>Imagem de Exibição<br />
                  <label for="arte"></label>
                  <input type="text" class="campotexto" name="arte" id="arte" />
                  <input type="button"  name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'arte')"/>
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

  <h2>Editorias Já Cadastradas No sistema</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Arte Reduzida (33%)</th>
                    <th>Título</th>
                    <th>Ativa</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($banners as $banner): ?>
                  <tr>
                    <td width="26%" align="center"><img src="<?=$banner->arte; ?>" width="200" alt="<?=$banner->titulo; ?>" /></td>
                    <td width="44%" align="center"><?=$banner->titulo; ?></td>
                    <td width="5%" align="center"><?=$banner->ativo; ?></td>
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/banners/alterar/' . $banner->idbanner; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/banners/del/' . $banner->idbanner; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
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