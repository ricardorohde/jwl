<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- errors -->
        <?php echo form_open(base_url() . 'restrito/categorias/alterar', 'id="form-categoria"'); ?>
        <?php echo form_fieldset('Alteração de Categorias'); ?>
        
        <?php echo form_hidden('id', $dados_categoria[0]->id); ?>

        <label for="nome">Informe o nome da categoria:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $dados_categoria[0]->nome; ?>"/>

        <label for="descricao">Descrição da categoria:</label>
        <textarea name="descricao" id="descricao"><?php echo $dados_categoria[0]->descricao; ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <br/>

        <input type="submit" name="edit" value="Alterar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->