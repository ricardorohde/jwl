
<div id="principal">
              <h2> <?=$editoria[0]->titulo; ?> &raquo; Alterando Seção</h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/editorias/alt'; ?>">
                <p>Titulo da Editoria<br />
                  <label for="titulo"></label>
                  <input name="titulo" type="text" class="campotexto" id="titulo" value="<?=$editoria[0]->titulo; ?>" size="50" />
                  <input type="hidden" name="idsecao" id="idsecao" value="<?=$editoria[0]->idsecao; ?>" />
                  <input type="hidden" name="id" id="id" value="<?=$editoria[0]->id; ?>" />
                  <br />
                  <label for="pertencea"></label>
                </p>
                <p>Conteúdo da Página<br />
                  <label for="cont"></label>
                  <textarea name="cont" id="cont" cols="45" rows="5"><?=$editoria[0]->conteudo; ?>
                  </textarea>
                  <?php echo display_ckeditor($ckeditor_cont); ?> </p>
                <p>Meta-tags<br />
                  <textarea name="metatags" class="campotexto" id="metatags" cols="2" rows="1"><?=$editoria[0]->metatags; ?>
                  </textarea>
                </p>
                <p>Palavras-chave<br />
                  <textarea name="keywords" class="campotexto" id="keywords" cols="2" rows="1"><?=$editoria[0]->keywords; ?>
                  </textarea>
                </p>
                <p>Ativo no site?<br />
                  <label>
                    <input name="ativo" type="radio" id="ativo_0" value="s" <?php if ($editoria[0]->ativo == "s"){ echo 'checked="checked"';} ?>  />
                    Sim</label>
                  <br />
                  <label>
                    <input type="radio" name="ativo" value="n" id="ativo_1" <?php if ($editoria[0]->ativo == "n"){ echo 'checked="checked"';} ?> />
                    Não</label>
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="Alterar Dados" class="botao" />
                </p>
              </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>