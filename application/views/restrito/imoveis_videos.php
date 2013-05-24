
<div id="principal">
              <h2>Imóvel: <?=$nomeimovel?> - Vídeos</h2>
  <h3>Novo Vídeo</h3>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/videos_add'; ?>">
                <p>
                Link para o vídeo do youtube (Ex: http://www.youtube.com/watch?v=GMmdN48WhNI&amp;feature=related)<br />
          
                  <label for="linkvideo"></label>
                  <input class="campotexto" type="text" name="linkvideo" id="linkvideo" />
                  <input name="idimovel" type="hidden" id="idimovel" value="<?=$retorno?>" />
                </p>
                <p>
                	Legenda do video
                    <br />
                    <label for="legenda"></label>
                	<input class="campotexto" type="text" name="legenda" id="legenda" />
                </p>
                <p><br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>
<h2>Vídeos Cadastradas</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Vídeo</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                <?php foreach($videos as $secao): ?>
                    <td width="20%" align="center"><img src="<?=renderImage($secao->linkvideo); ?>" width="120" height="90" alt="<?=$secao->linkvideo; ?>" /></td>
                    
                    <td width="60%"><?=$secao->legenda;?></td>
                    
                    <td width="5%" align="center"><a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/imoveis/videos_del/' . $secao->idvideos; ?>" title="Apagar Registro"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Vídeo</th>
                    <th>Legenda</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>