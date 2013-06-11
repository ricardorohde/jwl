
<div id="principal">
              <h2>Imóveis</h2>
              <h3>Novo Imóvel</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/add'; ?>">
                <p>Nome do Imóvel<br />
                  <label for="nome"></label>
                <input name="nome" type="text" class="campotexto" id="nome" size="50" />
                <br />
                  <label for="pertencea"></label>
                  <br />
                  Tipo de Imóvel<br />
                  <label for="tipo_imovel"></label>
                  <select class="campotexto" name="tipo_imovel" id="tipo_imovel">
                    <option value="Apartamento">Apartamento</option>
                    <option value="Casa">Casa</option>
                    <option value="Kitnet">Kitnet</option>
                  </select>
			<br />
                  <label for="tipo"></label>
                  <select class="campotexto" name="tipo" id="tipo">
                    <?php foreach ($tiposimoveis as $tp): ?>
                    <option value="<?=$tp->idtipo?>"><?=$tp->tipo?></option>
                    <?php endforeach; ?>
                  </select>
                </p>
          <!--================================== descricao do imovel ============================-->
                <h3>Descrição Completa</h3>

Quantidade de quartos<br />
                <input name="qtd_quarto" id="qtd_quarto" type="text" class="campotexto" size="50" />
                <br /><br />
                
Quantidade de suites<br />
                <input name="qtd_suite" id="qtd_suite" type="text" class="campotexto" size="50" />
                <br /><br />
                
Quantidade de Guaragem<br />
                <input name="qtd_garagem" id="qtd_garagem" type="text" class="campotexto" size="50" />
                <br /><br />

Tamanho m&sup2;<br />
                <input name="tamanho_area" id="tamanho_area" type="text" class="campotexto" size="10" />m&sup2;
                <br /><br />
                
Quantidade de Torres<br />
                <input name="qtd_torre" id="qtd_torre" type="text" class="campotexto" size="50" />
                <br /><br />
                
Complementos<br/>
(<span style="font-size:11px;color:#666;">Escreva aqui os complementos\nExemplo: 1 varanda,1 piscina, 1 churrasqueira, 1playground.</span>)<br />
				<textarea name="complementos" class="campotexto" id="complementos" cols="45" rows="5"></textarea>
                <br /><br />
                                
          <!--===================================================================================--      
                
                <p>
                  Descrição Resumida<br />
                  <textarea name="minidescr" class="campotexto" id="minidescr" cols="45" rows="3"></textarea>
                </p>-->
                <p>Imagem de Exibição<br />
                  <label for="fotocapa"></label>
                  <input type="text" class="campotexto" name="fotocapa" id="fotocapa" />
                  <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'fotocapa')"/>
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>

<br />
<div class="divisao_cadastro"></div>

  <h2>Imóveis Cadastrados</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Imagem</th>
                    <th>Imóvel</th>
                    <th>Tipo</th>
                    <th>Destaque</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($imoveis as $secao): ?>
                  <tr>
                    <td width="8%"><img src="<?=$secao->fotocapa; ?>" width="83" height="87" alt="<?=$secao->nome; ?>" style="border-radius:5px; border:2px #900 ridge;"/></td>
                    <td width="40%" align="center"><?=$secao->nome; ?></td>
                    <td width="15%" align="center"><?=$secao->tipoimovel; ?></td>
                    <td width="10%" align="center">
                    <a href="<?=base_url() . 'restrito/imoveis/destacar/' . $secao->idimoveis . '/' . $secao->destaque;?>">
                    <img src="<?=base_url()?>assets/imagens/icons/<?php if ($secao->destaque == 's') { echo 'star.png'; } else { echo 'star2.png'; } ?>" width="16" height="16" alt="Destaque" /></a>
                    </td>
                    <td width="20%" align="center">
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/alterar/' . $secao->idimoveis; ?>" title="Apresentação"><div id="apresent_icon" class="all_icon_imovel"></div></a>
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/localizacao/' . $secao->idimoveis; ?>" title="Localização"><div id="mapa_icon" class="all_icon_imovel"></div></a>
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/valores/' . $secao->idimoveis; ?>" title="Valores"><div id="dinheiro_icon" class="all_icon_imovel"></div></a> 
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/sites/' . $secao->idimoveis; ?>" title="Site do Empreendimento"><div id="link_icon" class="all_icon_imovel"></div></a>
               <!--============  Quebra de linha ==========-->        
                      <br /><br />
                      
                     <a href="<?php echo base_url() . 'restrito/imoveis/perspectivas/' . $secao->idimoveis; ?>" title="Fotos"><div id="foto_icon" class="all_icon_imovel"></div></a>
                     
                      <a href="<?php echo base_url() . 'restrito/imoveis/videos/' . $secao->idimoveis; ?>" title="Vídeos"><div id="video_icon" class="all_icon_imovel"></div></a> 
                      
                      
                      
                      
                      <!--<a href="<?php# echo base_url() . 'restrito/imoveis/alterar/' . $secao->idimoveis; ?>">
	                <img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a> -->
                      
                      
                    <a title="Apagar Imóvel" onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/del/' . $secao->idimoveis; ?>"><div id="excluir_icon" class="all_icon_imovel"></div></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Imagem</th>
                    <th>Imóvel</th>
                    <th>Tipo</th>
                    <th>Destaque</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>
             
             
             
             
             
             
             
<!--<?php foreach($imoveis as $secao): ?>
                  <tr>
                    <td width="8%"><img src="<?=$secao->fotocapa; ?>" width="83" height="87" alt="<?=$secao->nome; ?>" /></td>
                    <td width="23%" align="center"><?=$secao->nome; ?></td>
                    <td width="27%" align="center"><?=$secao->tipoimovel; ?></td>
                    <td width="10%" align="center">
                    <a href="<?=base_url() . 'restrito/imoveis/destacar/' . $secao->idimoveis . '/' . $secao->destaque;?>">
                    <img src="<?=base_url()?>assets/imagens/icons/<?php if ($secao->destaque == 's') { echo 'star.png'; } else { echo 'star2.png'; } ?>" width="16" height="16" alt="Destaque" /></a>
                    </td>
                    <td width="32%">
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/alterar/' . $secao->idimoveis; ?>" title="Apresentação"><img src="<?=base_url();?>assets/imagens/icons/_apresenta.png" width="20" height="20" alt="Apresentação" /></a>
                      <a href="<?php echo base_url() . 'restrito/imoveis/plantas/' . $secao->idimoveis; ?>" title="Plantas"><img src="<?=base_url();?>assets/imagens/icons/_plantas.png" width="20" height="19" alt="Plantas" /></a> 
                      <a href="<?php echo base_url() . 'restrito/imoveis/perspectivas/' . $secao->idimoveis; ?>" title="Perspectivas"><img src="<?=base_url();?>assets/imagens/icons/_perspectiva.png" width="20" height="20" alt="Perspectivas" /></a>
                      <a href="<?php echo base_url() . 'restrito/imoveis/servicos/' . $secao->idimoveis; ?>" title="Lazer e Serviços"><img src="<?=base_url();?>assets/imagens/icons/_lazer.png" width="20" height="20" alt="Lazer e Serviços" /></a>
                      <a href="<?php echo base_url() . 'restrito/imoveis/localizacao/' . $secao->idimoveis; ?>" title="Localização"><img src="<?=base_url();?>assets/imagens/icons/_localizacao.png" width="20" height="21" alt="Localização" /></a>
                      <a href="<?php echo base_url() . 'restrito/imoveis/valores/' . $secao->idimoveis; ?>" title="Valores"><img src="<?=base_url();?>assets/imagens/icons/_valor.png" width="20" height="20" alt="Valores" /></a> 
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/realizacao/' . $secao->idimoveis; ?>" title="Realização"><img src="<?=base_url();?>assets/imagens/icons/_realizacao.png" width="20" height="20" alt="Realização" /></a> 
                      
                      
                      <a href="<?php echo base_url() . 'restrito/imoveis/acompanhamento/' . $secao->idimoveis; ?>" title="Acompanhamento das Obras"><img src="<?=base_url();?>assets/imagens/icons/_andamento.png" width="20" height="19" alt="Acompanhamento das Obras" /></a>
                      <a href="<?php echo base_url() . 'restrito/imoveis/videos/' . $secao->idimoveis; ?>" title="Vídeos"><img src="<?=base_url();?>assets/imagens/icons/_video.png" width="20" height="20" alt="Vídeos" /></a> 
                      <a href="<?php echo base_url() . 'restrito/imoveis/sites/' . $secao->idimoveis; ?>" title="Site do Empreendimento"><img src="<?=base_url();?>assets/imagens/icons/_site.png" width="20" height="20" alt="Site do Empreendimento" /></a>
                      
                      
                      <!--<a href="<?php# echo base_url() . 'restrito/imoveis/alterar/' . $secao->idimoveis; ?>">
	                <img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a> --<<<<<<<<<<<<<< FALTA FEXAR
                      
                      
                    <a title="Apagar Imóvel" onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/del/' . $secao->idimoveis; ?>"><img src="<?=base_url();?>assets/imagens/icons/cross.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>-->             
             
             
             
             