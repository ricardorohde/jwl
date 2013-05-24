<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
        <?php echo form_open(base_url() . 'restrito/propagandas/alterar', 'id="form-propaganda"'); ?>
        <?php echo form_fieldset('Alteração de Propagandas'); ?>
        
        <?php echo form_hidden('id', $dados_propaganda[0]->id); ?>

        <label for="produto">Selecione o produto:</label>
        
        <?php foreach ($produtos as $produto): ?>
            <?php $options[$produto->id] = $produto->nome; ?>
        <?php endforeach; ?>
        <?php $select = $dados_propaganda[0]->produto; ?>
        <?php if ($select == set_value('categoria'))
            echo 'selected = "selected"'; ?>
        <?php echo form_dropdown('produto', $options, $select, 'disabled="true"'); ?>

        <label for="nome">Informe o nome da propaganda:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $dados_propaganda[0]->nome; ?>"/>

        <label for="nome">Selecione o banner principal:</label>
        <input type="text" name="banner_principal" id="banner_principal" value="<?php echo $dados_propaganda[0]->banner_principal; ?>"/>
        <input type="button" name="btn_banner" value="Selecione..." onclick="BrowseServer('Images:', 'banner_principal')"/>

        <label for="nome">Selecione o banner secundário:</label>
        <input type="text" name="banner_secundario" id="banner_secundario" value="<?php echo $dados_propaganda[0]->banner_secundario; ?>"/>
        <input type="button" name="btn_banner" value="Selecione..." onclick="BrowseServer('Images:', 'banner_secundario')"/>

        <label for="descricao">Descrição da propaganda:</label>
        <textarea name="descricao" id="descricao"><?php echo $dados_propaganda[0]->descricao; ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <br/>

        <input type="submit" name="edit" value="Alterar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->