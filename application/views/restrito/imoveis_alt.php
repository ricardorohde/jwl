
<div id="principal">
              <h2>Apresentação - Alteração              </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/alt'; ?>">
                <p>Nome do Imóvel<br />
                  <label for="nome"></label>
                  <input name="nome" type="text" class="campotexto" id="nome" value="<?=$imoveis[0]->nome; ?>" size="50" />
                  <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$imoveis[0]->idimoveis; ?>" />
                  <br />
                  <label for="pertencea"></label>
                  <br />
                  Tipo de Imóvel<br />
                  <label for="tipo_imovel"></label>
                  <select class="campotexto" name="tipo_imovel" id="tipo_imovel">
					<?php
                  	if($imoveis[0]->tipo_imovel != ''){	
						echo '<option value="'.$imoveis[0]->tipo_imovel.'">'.$imoveis[0]->tipo_imovel.'</option>';
					} 
					?>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa">Casa</option>
                    <option value="Kitnet">Kitnet</option>
                  </select>
			<br />
                  <label for="tipo"></label>
                  <select class="campotexto" name="tipo" id="tipo">
                    <?php foreach ($tiposimoveis as $tp): ?>
                    <option value="<?=$tp->idtipo?>" <?php if ($imoveis[0]->tipo == $tp->idtipo) { echo 'selected="selected"'; } ?> >
                      <?=$tp->tipo?>
                    </option>
                    <?php endforeach; ?>
                  </select>
                </p>

          <!--================================== descricao do imovel ============================-->
                <h3>Descrição Completa</h3>

Quantidade de quartos<br />
                <input name="qtd_quarto" id="qtd_quarto" type="text" class="campotexto" size="50" value="<?=$imoveis[0]->qtd_quarto;?>" />
                <br /><br />
                
Quantidade de suites<br />
                <input name="qtd_suite" id="qtd_suite" type="text" class="campotexto" size="50" value="<?=$imoveis[0]->qtd_suite;?>" />
                <br /><br />
                
Quantidade de Guaragem<br />
                <input name="qtd_garagem" id="qtd_garagem" type="text" class="campotexto" size="50" value="<?=$imoveis[0]->qtd_garagem;?>" />
                <br /><br />

Tamanho m&sup2;<br />
                <input name="tamanho_area" id="tamanho_area" type="text" class="campotexto" size="10" value="<?=$imoveis[0]->tamanho_area;?>" />m&sup2;
                <br /><br />
                
Quantidade de Torres<br />
                <input name="qtd_torre" id="qtd_torre" type="text" class="campotexto" size="50" value="<?=$imoveis[0]->qtd_torre;?>" />
                <br /><br />
                
Complementos<br/>
(<span style="font-size:11px;color:#666;">Escreva aqui os complementos\nExemplo: 1 varanda,1 piscina, 1 churrasqueira, 1playground.</span>)<br />
				<textarea name="complementos" class="campotexto" id="complementos" cols="45" rows="5"><?=$imoveis[0]->complementos;?></textarea>
                <br /><br />
                                
          <!--===================================================================================-->    
          
                <p>Imagem de Exibição<br />
                  <label for="fotocapa"></label>
                  <input class="campotexto" name="fotocapa" type="text" id="fotocapa" value="<?=$imoveis[0]->fotocapa; ?>" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'fotocapa')"/>
                </p>
                
                
                <p><br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
              </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>