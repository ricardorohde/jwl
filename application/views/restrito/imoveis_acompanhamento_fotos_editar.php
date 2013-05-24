
<div id="principal">
              <h2>Acompanhamento de Obra &raquo; Edição de Imagem            </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/acompanhamentos_fotos_alt'; ?>">
                <p>
                  <label for="pertencea"></label>
                OBS: Não é possível trocar a imagem, mas é possível alterar a data da mesma. Caso a foto não seja mais necessária, exclua e cadastre outra.</p>
                <p><br />
                  Data<br />
                  <label for="dadata"></label>
                  <input type="text" name="dadata" id="dadata" value="<?=$lafoto[0]->data?>" />
                </p>
                <p>Imagem<br />
  <label for="dadata"></label>
  
  <div class="laimg">
                   	<img src="<?=base_url()?>assets/userfiles/images/<?=$lafoto[0]->imagem?>" width="150px" height="120px" />
  </div>
  <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$lafoto[0]->idimovel?>" />
  <input name="idstats" type="hidden" id="idstats" value="<?=$lafoto[0]->idstats?>" />
  </p>
                <p><br />
               
                
                
                  <input type="submit" name="button" id="button" value="Editar Dados" class="botao" />
                </p>
  </form>
  <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>