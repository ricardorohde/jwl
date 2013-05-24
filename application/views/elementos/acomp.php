  <div id="acompanhamento">
        	<h1 class="scond">Acompanhe a Obra</h1>
            <div class="obras">
				<?php $tchu = todosImoveis(); ?>
                <form id="lstobras" method="post" action="">
                <select id="lasobras" class="selectArea">
                    <option value="" selected="selected">Selecione</option>
					<?php foreach ($tchu as $tcha): ?>
	                	<option value="<?=$tcha->idimoveis?>"><?=$tcha->nome?></option>
                    <? endforeach; ?>
                 
                </select>
            </form>
            </div>
  </div>