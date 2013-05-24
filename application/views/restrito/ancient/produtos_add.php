<div id="content">
    <div id="form-cadastro">
        <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
        <?php echo form_open(base_url() . 'restrito/produtos/cadastrar', 'id="form-produto"'); ?>
        <?php echo form_fieldset('Cadastro de Produtos'); ?>

        <label for="categoria">Selecione a categoria do produto:</label>
        <?php $options = array('' => 'Selecione...'); ?>
        <?php foreach ($categorias as $categoria): ?>
            <?php $options[$categoria->id] = $categoria->nome; ?>
        <?php endforeach; ?>
        <?php echo form_dropdown('categoria', $options, set_value('categoria')); ?>

        <label for="nome">Informe o nome do produto:</label>
        <input type="text" name="nome" id="nome" value="<?php echo set_value('nome'); ?>"/>

        <label for="descricao">Descrição do produto:</label>
        <textarea name="descricao" id="descricao"><?php echo set_value('descricao'); ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <label for="imagem">Selecione a imagem do produto:</label>
        <input type="text" name="imagem" id="imagem" value="<?php echo set_value('imagem'); ?>"/>
        <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>

        <div class="box-left">
            <label for="preco">Informe o preço do produto (R$):</label>
            <input type="text" name="preco" id="preco" value="<?php echo set_value('preco'); ?>"/>
        </div>
        <div class="box-right">
            <label for="volume">Informe o volume do produto (litros):</label>
            <input type="text" name="volume" id="volume" value="<?php echo set_value('volume'); ?>"/>
        </div>

        <label for="destaque">Destacar o produto:</label>
        <select name="destaque" id="destaque">
            <option value="">Selecione...</option>
            <option value="s">Sim</option>
            <option value="n">Não</option>
        </select>
        
        <br/>

        <input type="submit" name="add" value="Cadastrar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->