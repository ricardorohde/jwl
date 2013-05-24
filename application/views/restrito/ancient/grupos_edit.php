<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- errors -->
        <?php echo form_open(base_url() . 'restrito/grupos/alterar', 'id="form-grupo"'); ?>
        <?php echo form_fieldset('Alteração de Grupos'); ?>
        
        <?php echo form_hidden('id', $dados_grupo[0]->id); ?>

        <label for="nome">Informe o nome do grupo:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $dados_grupo[0]->nome; ?>"/>

        <label for="descricao">Descrição do grupo:</label>
        <textarea name="descricao" id="descricao"><?php echo $dados_grupo[0]->descricao; ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <br/>

        <input type="submit" name="edit" value="Alterar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->