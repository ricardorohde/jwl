<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- errors -->
        <?php echo form_open(base_url() . 'restrito/fichatecnica/cadastrar', 'id="form-categoria"'); ?>
        <?php echo form_fieldset('Cadastro de Categorias'); ?>

        <label for="nome">Informe o nome da categoria:</label>
        <input type="text" name="nome" id="nome" value="<?php echo set_value('nome'); ?>"/>

        <label for="descricao">Descrição da categoria:</label>
        <textarea name="descricao" id="descricao"><?php echo set_value('descricao'); ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <br/>

        <input type="submit" name="add" value="Cadastrar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->