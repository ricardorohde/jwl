
<div id="principal">
              <h2>Imóveis &raquo; <?=$nomeimovel?> &raquo; Acompanhamento de Obra &raquo; Imagens              </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/imoveis/acompanhamentos_fotos_add'; ?>">
                <p>
                  <label for="pertencea"></label>
                  <br />
                  Data<br />
                  <label for="dadata"></label>
                  <input type="text" name="dadata" id="dadata" />
</p>
                <p>Imagem<br />
  <label for="dadata"></label>
 	 <input type="file" name="file_upload" id="file_upload" />
                <input name="idimoveis" type="hidden" id="idimoveis" value="<?=$retorno?>" />
                </p>
                <p><br />
                <div id="filess"></div>
                
                
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>

<div class="listafotos">
<h2>Imagens já cadastradas</h2>

<?php 
	if (empty($fotos)) {
		echo "<p>Nenhuma imagem encontrada até o momento.</p>";
	}

	foreach ($datas as $dd):?>
		<h2 style="display:block; clear:both;">Data: <?=dataBra($dd->data);?></h2>
<?php
			foreach($fotos as $ff):
				if ($dd->data == $ff->data) { ?>
					<div class="laimg">
                    	<?php
						  //instrução para verificar se são as novas imagens ou se são as imagens antigas, que utilizavam 
						  //o método do ckfinder 
						 
						 if (null) {
							
						 } else {
							
						 } 
						 
						 ?>
                        
                        <img src="<?=base_url()?>assets/userfiles/images/<?=$ff->imagem?>" width="150px" height="120px" />
                        
                        
                        <div class="mbar">
                        <a onclick="return confirm('Tem certeza de que deseja excluir o registro? Essa operação é irreversível.');" href="<?=base_url()?>restrito/imoveis/excluir_foto/<?=$ff->idstats?>">Excluir</a>
                        
                        <a href="<?=base_url()?>restrito/imoveis/editar_foto/<?=$ff->idstats?>">Editar</a>
                        
                        </div>
                    </div>		
				<?php }
			
			endforeach;
	  endforeach;
?>
</div>
<p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>