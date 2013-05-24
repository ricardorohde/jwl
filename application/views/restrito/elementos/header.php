<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>JWL - Área Restrita</title>
<link rel="icon" href="<?=base_url()?>assets/imagens/backend/restrito.png" type="image/png">

<script type="text/javascript">var base_url = "<?=base_url()?>";</script>
<link href="<?=base_url(); ?>assets/css/backend.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=base_url(); ?>assets/css/table_jui.css" />
<link rel="stylesheet" href="<?=base_url(); ?>assets/css/jquery-ui-1.8.4.custom.css" />
<link rel='stylesheet' type='text/css' media='screen' href='<?=base_url(); ?>assets/css/jquery.ui.css'>
<script type="text/javascript">var base_url = "<?=base_url()?>";</script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/jquery.mim.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/jquery.Jcrop.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/call-ckfinder.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>assets/js/backend.js"></script>

<!-- multi upload arquivos -->
<script type="text/javascript" src="<?=base_url(); ?>assets/js/uploadfy/jquery.uploadify-3.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/js/uploadfy/uploadify.css" />
<script>
$(function() {
    $('#file_upload').uploadify({
        'swf'      : base_url + 'assets/js/uploadfy/uploadify.swf',
        'uploader' : base_url + 'assets/js/uploadfy/uploadify.php',
        // Put your options here
		'onUploadSuccess' : function(file, data, response) {
        $('<input>') // Cria um elemento input
		.attr({ type: 'hidden', name: 'uploada[]', value: file.name }) // Definindo atributos
		.appendTo('#filess'); // Adiciona ele ao elemento div com o id myDiv
		
//		$('#filess').appendTo("<input type='text' id='uploada[]' name='uploada[]' value='"+file.name+"' />")
    } 
    });
});
</script>
</head>
