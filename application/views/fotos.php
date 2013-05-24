<script type="text/javascript">
chamaFancybox();
</script>

<?php foreach ($ultimas as $ult): ?>	                                    
	<div class="trataimg">
    <a class="ovomaltine" href="<?=$ult->imagem?>"><img src="<?=$ult->imagem?>" width="100"  /></a>
    </div>
<?php endforeach; ?>

<?php if (empty($ultimas)) {
	echo "<p>Nenhuma imagem encontrada.</p>";
} ?>
