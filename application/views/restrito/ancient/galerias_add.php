<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
        <?php echo form_open(base_url() . 'restrito/galerias/cadastrar', 'id="form-galeria"'); ?>
        <?php echo form_fieldset('Cadastro de Galerias'); ?>

        <label for="produto">Selecione o produto:</label>
        <?php $options = array('' => 'Selecione...'); ?>
        <?php foreach ($produtos as $produto): ?>
            <?php $options[$produto->id] = $produto->nome; ?>
        <?php endforeach; ?>
        <?php echo form_dropdown('produto', $options, set_value('produto')); ?>

        <label for="nome">Informe o nome da galeria:</label>
        <input type="text" name="nome" id="nome" value="<?php echo set_value('nome'); ?>"/>

        <label for="imagem">Selecione a imagem de capa da galeria:</label>
        <input type="text" name="imagem" id="imagem" value="<?php echo set_value('imagem'); ?>"/>
        <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>

        <br/>

        <input type="submit" name="add" value="Cadastrar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->