<div id="buscaDeImoveis" style="width: 500px;">
<h1>Selecione a Cidade</h1>
<form name="pcity" method="post" action="<?=base_url()?>imoveis/processaCidade">
    <?php foreach ($cidades as $cid): ?>
    <div class="estilizaQuads">
    <input type="checkbox" name="cidadess[]" value="<?=$cid->idcidade?>" id="cidadess[]"><?=$cid->cidade?>
    </div>
    <?php endforeach; ?>    
       <input type="submit" name="citysel" id="citysel" value="Selecionar">
    <br>
  </p>
</form>
</div>
