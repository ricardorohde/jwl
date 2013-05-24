<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body>
<div id="buscaDeImoveis" style="width: 500px;">
<h1>Selecione Bairros</h1>
<form name="pcity" method="post" action="<?=base_url()?>imoveis/processaBairro">
    <?php foreach ($bairros as $bai): ?>
    <div class="estilizaQuads">
    <input type="checkbox" name="bairross[]" value="<?=$bai->idbairro?>" id="bairross[]"><?=$bai->bairro?>
    </div>
    <?php endforeach; ?>    
      <input type="submit" name="bairrosel" id="bairrosel" value="Selecionar">
    <br>
  </p>
</form>
</div>
</body>
</html>
