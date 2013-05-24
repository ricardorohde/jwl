
<div id="principal">
              <h2>Banners Ateração              </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/banners/alt'; ?>">
        <p>Titulo do Banner<br />
                  <label for="titulo"></label>
                <input name="titulo" type="text" class="campotexto" id="titulo" value="<?php echo $banner[0]->titulo; ?>" size="50" />
                
            <label for="pertencea"></label>
                </p>
                <p>                  Link do Banner<br />
                  <label for="link"></label>
                 <input name="link" type="text" id="link" value="<?php echo $banner[0]->link; ?>" size="50" />
                   </p>
                <p>Imagem de Exibição<br />
                  <label for="arte"></label>
                  <input type="text" name="arte" id="arte" value="<?php echo $banner[0]->arte; ?>" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'arte')"/>
                  <input type="hidden" name="idbanner" id="idbanner" value="<?php echo $banner[0]->idbanner; ?>" />
                </p>
                <p>Ativo no site?<br />
                  <label>
                    <input name="ativo" type="radio" id="ativo_0" value="s" <?php if ($banner[0]->ativo == "s") { echo 'checked="checked"'; } ?> />
                    Sim</label>
                  <br />
                  <label>
                    <input type="radio" name="ativo" value="n" id="ativo_1" <?php if ($banner[0]->ativo == "n") { echo 'checked="checked"'; } ?> />
                    Não</label>
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="Alterar Dados" class="botao" />
                </p>
</form>
  <h2>&nbsp;</h2>
  <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>