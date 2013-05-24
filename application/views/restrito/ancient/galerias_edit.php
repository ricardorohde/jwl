<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
        <?php echo form_open(base_url() . 'restrito/galerias/alterar', 'id="form-galeria"'); ?>
        <?php echo form_fieldset('Cadastro de Galerias'); ?>
        
        <?php echo form_hidden('id', $dados_galeria[0]->id); ?>

        <label for="produto">Selecione o produto:</label>
        <?php $options = array('' => 'Selecione...'); ?>
        <?php foreach ($produtos as $produto): ?>
            <?php $options[$produto->id] = $produto->nome; ?>
        <?php endforeach; ?>
        <?php $select = $dados_galeria[0]->produto; ?>
        <?php if ($select == set_value('produto'))
            echo 'selected = "selected"'; ?>
        <?php echo form_dropdown('produto', $options, $select, 'disabled = "true"'); ?>

        <label for="nome">Informe o nome da galeria:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $dados_galeria[0]->nome; ?>"/>
        
        <label for="imagem">Selecione a capa da galeria:</label>
        <input type="text" name="imagem" value="<?php echo $dados_galeria[0]->imagem; ?>"/>
        <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>
        
        <br/>

        <input type="submit" name="edit" value="Alterar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->