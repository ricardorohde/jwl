<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
					header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
                    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
                    header ("Cache-Control: no-cache, must-revalidate");
                    header ("Pragma: no-cache");
                    
                    header ("Content-type: application/excel"); 
                    $arquivo = date('dmY') . 'Metron.xls';
                    header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
                    header("Expires: 0");

?>
</head>

<body>
<table width="99%" border="1" cellpadding="0" cellspacing="0" class="display" id="example">
  <thead>
  
    <tr>
      <?php if ($titlu != "Newsletter") { ?>
      <th>Nome</th>
      <?php } ?>
      <th>Email</th>
      <?php if ($titlu != "Newsletter") { ?>
      <th>Bairro</th>
      <?php } ?>
      <?php if ($titlu == "Sugestão") { ?>
      <th>Sugestão</th>
      <?php } ?>
      <th>Data/Hora</th>
      <th>Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($registro as $registro): ?>
    <tr>
      <?php if ($titlu != "Newsletter") { ?>
      <td width="20%"><?=$registro->nome; ?></td>
      <?php } ?>
      <td width="18%" align="center"><?=$registro->email; ?></td>
      <?php if ($titlu != "Newsletter") { ?>
      <td width="13%" align="center"><?=$registro->bairro; ?></td>
      <?php } ?>
      <?php if ($titlu == "Sugestão") { ?>
      <td width="28%" align="center"><?=$registro->sugestao; ?></td>
      <?php } ?>
      <td width="11%" align="center"><?=$registro->datacri; ?></td>
      <td width="10%" align="center"><?=$registro->tel; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
  </tfoot>
</table>
</body>
</html>