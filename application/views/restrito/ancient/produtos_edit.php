<div id="content">
    <div id="form-cadastro">
        <?php $this->load->helper('conversor'); ?>
        <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
        <?php echo form_open(base_url() . 'restrito/produtos/alterar', 'id="form-produto"'); ?>
        <?php echo form_fieldset('Alteração de Produtos'); ?>

        <?php echo form_hidden('id', $dados_produto[0]->id); ?>

        <label for="categoria">Selecione a categoria do produto:</label>
        <?php $options = array('' => 'Selecione...'); ?>
        <?php foreach ($categorias as $categoria): ?>
            <?php $options[$categoria->id] = $categoria->nome; ?>
        <?php endforeach; ?>
        <?php $select = $dados_produto[0]->categoria; ?>
        <?php if ($select == set_value('categoria'))
            echo 'selected = "selected"'; ?>
        <?php echo form_dropdown('categoria', $options, $select); ?>

        <label for="nome">Informe o nome do produto:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $dados_produto[0]->nome; ?>"/>

        <label for="descricao">Descrição do produto:</label>
        <textarea name="descricao" id="descricao"><?php echo $dados_produto[0]->descricao; ?></textarea>
        <?php echo display_ckeditor($ckeditor_descricao); ?>

        <label for="imagem">Selecione a imagem do produto:</label>
        <input type="text" name="imagem" id="imagem" value="<?php echo $dados_produto[0]->imagem; ?>"/>
        <input type="button" name="btn_imagem" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>

        <div class="box-left">
            <label for="preco">Informe o preço do produto (R$):</label>
            <input type="text" name="preco" id="preco" value="<?php echo decimal_to_reaisbr($dados_produto[0]->preco); ?>"/>
        </div>
        <div class="box-right">
            <label for="volume">Informe o volume do produto (litros):</label>
            <input type="text" name="volume" id="volume" value="<?php echo $dados_produto[0]->volume; ?>"/>
        </div>
        
        <div class="clearfloat"></div>
        
        <div class="box-01">
            <label for="status">Status:</label>
            <?php $options = array('' => 'Selecione...', '0' => 'Ativado', '1' => 'Desativado'); ?>
            <?php $select = $dados_produto[0]->status; ?>
            <?php if ($select == set_value('status')) echo 'selected = "true"'; ?>
            <?php echo form_dropdown('status', $options, $select); ?>
        </div>        

        <div class="box-02">
            <label for="destaque">Destaque:</label>
            <?php $options = array('' => 'Selecione...', 's' => 'Sim', 'n' => 'Não'); ?>
            <?php $select = $dados_produto[0]->destaque; ?>
            <?php if ($select == set_value('destaque')) echo 'selected = "true"'; ?>
            <?php echo form_dropdown('destaque', $options, $select); ?>
        </div>

        <div class="box-03">
            <label for="disponibilidade">Disponibilidade:</label>
            <?php $options = array('' => 'Selecione...', 's' => 'Sim', 'n' => 'Não'); ?>
            <?php $select = $dados_produto[0]->disponibilidade; ?>
            <?php if ($select == set_value('disponibilidade')) echo 'selected = "true"'; ?>
            <?php echo form_dropdown('disponibilidade', $options, $select); ?>
        </div>
        
        <div class="clearfloat"></div>

        <br/>

        <input type="submit" name="edit" value="Alterar"/>

        <?php echo form_fieldset_close(); ?>
        <?php echo form_close(); ?>
    </div><!-- #form-cadastro -->
</div><!-- #content -->