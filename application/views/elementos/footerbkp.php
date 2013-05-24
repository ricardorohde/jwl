<div id="rodape">
        		<div id="info-rodape">
                
                <img src="http://www.metronengenharia.com.br/new/assets/imagens/frontend/legenda_busca_rodape.png" alt="" style="float:rigth; margin-left:190px;margin-top:-10px;margin-bottom:-6px;"/>
                
               	  <form id="buscaImoveis" action="<?=base_url()?>imoveis/busca" method="post">
                   	<h3><img src="<?=base_url();?>assets/imagens/frontend/encontre_seu_imovel.png" width="144" height="38" alt="Encontre Seu Imóvel" /></h3>
                    <label for="btipo"></label>
                    <select name="bcidade" class="stilizaSelect" id="bcidade">
                      <option selected="selected">Cidade</option>
                      <option value="0">Todos</option>
                      <?php $cid = city(); 
					  			foreach ($cid as $moreira):
					  ?>
	                    
                      	<option value="<?=$moreira->idcidade?>"><?=$moreira->cidade?></option>
                        <?php endforeach; ?>
                    </select>
                        <label for="bbairro"></label>
                    <select name="bbairro" class="stilizaSelect" id="bbairro">
                      <option>Bairro</option>

                    </select>
                        <label for="btipo"></label>
                    <select name="btipo" class="stilizaSelect" id="btipo">

                      <option>Tipo</option>
                    </select>
                       <!-- <label for="bempr"></label>
                    <select name="bempr" class="stilizaSelect" id="bempr">
                      <option selected="selected" value="">Imovel</option>

                    </select> -->
                    <input name="button" type="submit" class="bbuscar" id="button" value="Buscar" />
               	  </form>
          </div>
        </div>

		
        </div>
        <!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">

/* <![CDATA[ */

var script = document.createElement("script");script.type="text/javascript";var src = "http://www.atendimentoon.com.br/metron/server.php?request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);

/* ]]> */

</script><noscript><img src="http://www.atendimentoon.com.br/metron/server.php?request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript><!-- http://www.LiveZilla.net Tracking Code -->

	</body>
</html>