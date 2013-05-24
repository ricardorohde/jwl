
<div id="principal">
              <h2>Imóvel: <?=$localizacao[0]->nome?> - Locaizacao</h2>
  <h3>Coloque o Endereço e também o script do Google Maps!</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/localizacao_alt'; ?>">
                <p>Estado<br />
                  <label for="estado"></label>
                  <select class="campotexto" name="estado" id="estado">
                    <option>Selecione</option>
                    <?php foreach ($uf as $uf): ?>
                    <option <?php if ($uf->idestado == $localizacao[0]->estado) { echo 'selected="selected"'; }?> value="<?=$uf->idestado?>"><?=$uf->estado?></option>
                    <? endforeach; ?>
                  </select>
                </p>
                <p>Cidade<br />
                  <label for="cidade"></label>
                  <select class="campotexto" name="cidade" id="cidade">
                    <option>Selecione</option>
                      <?php foreach ($city as $cid): ?>
                    <option <?php if ($cid->idcidade == $localizacao[0]->cidade) { echo 'selected="selected"'; }?> value="<?=$cid->idcidade?>"><?=$cid->cidade?></option>
                    <? endforeach; ?>
                  </select>
                </p>
                <p>Bairro<br />
                  <label for="bairro"></label>
                  <select class="campotexto" name="bairro" id="bairro">
                    <option>Selecione</option>
                      <?php foreach ($bairro as $bai): ?>
                    <option <?php if ($bai->idbairro == $localizacao[0]->bairro) { echo 'selected="selected"'; }?> value="<?=$bai->idbairro?>"><?=$bai->bairro?></option>
                    <? endforeach; ?>
                  </select>
                </p>
                <p>Endereço Completo<br />
                  <label for="localizacao"></label>
                  <input name="localizacao" type="text" class="campotexto" id="localizacao" value="<?=$localizacao[0]->localizacao; ?>"/>
                <br />
                  <label for="pertencea"></label>
                  <br />
                Google Maps Script<br />
                  <label for="googlemaps"></label>
                  <textarea class="campotexto" name="googlemaps" cols="50" rows="5" id="googlemaps"><?=$localizacao[0]->googlemaps; ?>
                  </textarea>
                  <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$localizacao[0]->idimoveis;?>" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Adicionar/Alterar Localização" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>