
<div id="principal">
              <h2>Notícias Alteração              </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/noticias/alt'; ?>">
                <p>Titulo da Notícia<br />
                  <label for="titulo"></label>
                <input name="titulo" type="text" class="campotexto" id="titulo" value="<?php echo $noticia[0]->titulo; ?>" size="50" />
                <br />
                  <label for="pertencea"></label>
                </p>
                <p>Conteúdo da Página<br />
                  <label for="texto"></label>
                 <textarea name="texto" id="texto" cols="45" rows="5"><?php echo $noticia[0]->texto; ?></textarea>
                   <?php echo display_ckeditor($ckeditor_texto); ?>
                </p>
                <p>Fonte<br />
                  <label for="fonte"></label>
                  <input name="fonte" type="text" id="fonte" value="<?php echo $noticia[0]->fonte; ?>" />
                  <input name="idnoticias" type="hidden" id="idnoticias" value="<?php echo $noticia[0]->idnoticias; ?>" />
                </p>
                <p>Ativo no site?<br />
                  <label>
                    <input name="ativo" type="radio" id="ativo_0" value="s" <?php if ($noticia[0]->ativo == 's'){ echo 'checked="checked"'; } ?> />
                    Sim</label>
                  <br />
                  <label>
                    <input type="radio" name="ativo" value="n" id="ativo_1" <?php if ($noticia[0]->ativo == 'n'){ echo 'checked="checked"'; } ?> />
                    Não</label>
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>