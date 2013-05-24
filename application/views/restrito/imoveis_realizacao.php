
<div id="principal">
              <h2>Imóveis &raquo; <?=$realizacao[0]->nome?> &raquo; Realização</h2>
  <h3>&nbsp;</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/realizacao_alt'; ?>">
                <p>Realização<br />
                  <label for="realizacao"></label>
                  <textarea name="realizacao" cols="50" rows="10" class="" id="realizacao"><?=$realizacao[0]->realizacao; ?>
                  </textarea> <?php echo display_ckeditor($ckeditor_descricao); ?>
                <br />
                  <label for="pertencea"></label>
                  <br />
                  <label for="googlemaps"></label>
                  <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$realizacao[0]->idimoveis;?>" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Adicionar/Alterar Realização" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>