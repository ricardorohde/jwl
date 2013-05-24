<div id="content">
    
    <div class="box-title">
        <h2><?php echo $dados_galeria[0]->nome; ?></h2>
    </div><!-- .box-title -->
    <div class="box-image">
        <img src="<?php echo $dados_galeria[0]->imagem; ?>" alt="capa" width="320"/>
    </div><!-- .box-image -->
    
    <div class="box-info">
        <?php $this->load->helper('conversor'); ?>
        <p>Produto: <?php echo $dados_galeria[0]->nome_produto; ?></p>
        <p>Preço: R$ <?php echo decimal_to_reaisbr($dados_galeria[0]->preco_produto); ?></p>
        <p>Volume: <?php echo litros_to_ml($dados_galeria[0]->volume_produto); ?> ml</p>
        <div class="text"><?php echo word_limiter($dados_galeria[0]->descricao_produto, 60); ?></div>
    </div><!-- .box-info -->
    
    <div class="clearfloat"></div>
    
    <div class="box-form">
        <div id="errors"><?php echo validation_errors(); ?></div>
        <?php echo form_open(base_url() . 'restrito/galerias/populate', 'id="form-fotos"'); ?>
        <?php echo form_hidden('galeria', $dados_galeria[0]->id); ?>
        
        <label for="nome">informe o nome da imagem:</label>
        <input type="text" name="nome" id="nome" value="<?php echo set_value('nome'); ?>"/>
        
        <label for="imagem">Selecione imagens para a galeria:</label>
        <input type="text" name="imagem" id="imagem" value="<?php echo set_value('imagem'); ?>"/>
        <input type="button" name="btn_img" value="Selecione..." onclick="BrowseServer('Images:', 'imagem')"/>
        
        <br/>
        
        <input type="submit" name="add" value="Enviar"/>
        <?php echo form_close(); ?>
    </div><!-- .box-form -->
    
    <div class="box-fotos">
        <?php foreach ($imagens as $item): ?>
        <span class="item-home">
            <img src="<?php echo $item->imagem; ?>" alt="foto" width="100" height="75"/>
            <a href="<?php echo base_url() . 'restrito/galerias/drop/' . $item->id; ?>" onclick="return confirm('Confirma a exclusão desta imagem?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png'?>" title="excluir"/></a>
        </span>
        <?php endforeach; ?>
    </div><!-- .box-fotos -->
</div><!-- #content -->