<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
        <?php echo form_open(base_url() . 'restrito/propagandas/cadastrar', 'id="form-propaganda"'); ?>
        <?php echo form_fieldset('Cadastro de Propagandas'); ?>

        <label for="produto">Selecione o produto:</label>
        <?php $options = array('' => 'Selecione...') ?>
        <?php foreach ($produtos as $produto): ?>
            <?php $options[$produto->id] = $produto->nome; ?>
        <?php endforeach; ?>
        <?php echo form_dropdown('produto', $options, set_value('produto')); ?>

        <label for="nome">Informe o nome da propaganda:</label>
        <input type="text" name="nome" id="nome" value="<?php echo set_value('nome'); ?>"/>

        <label for="nome">Selecione o banner principal:</label>
        <input type="text" name="banner_principal" id="banner_principal" value="<?php echo set_value('banner_principal'); ?>"/>
        <input type="button" name="btn_banner" value="Selecione..." onclick="BrowseServer('Images:', 'banner_principal')"/>

        <label for="nome">Selecione o banner secundário:</label>
        <input type="text" name="banner_secundario" id="banner_secundario" value="<?php echo set_value('banner_secundario'); ?>"/>
        <input type="button" name="btn_banner" value="Selecione..." onclick="BrowseServer('Images:', 'banner_secundario')"/>

        <label for="descricao">Descrição da propaganda:</label>
        <textarea name="descricao" id="descricao"><?php echo set_value('descricao'); ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <br/>

        <input type="submit" name="add" value="Cadastrar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->