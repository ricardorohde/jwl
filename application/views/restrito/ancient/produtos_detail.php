<div id="content">
    <?php $this->load->helper('conversor'); ?>
    <div class="title">
        <h3><?php echo $dados_produto[0]->nome; ?></h3>        
    </div><!-- .title -->
    <div class="product-image">
        <div class="image">
            <img src="<?php echo $dados_produto[0]->imagem; ?>" width="300" alt="imagem"/>
        </div><!-- .image -->
        <div class="thumb">
            <ul>
                <?php foreach ($imagens as $img): ?>
                    <li>
                        <div class="img">
                            <a href=""><img src="<?php echo $img->imagem; ?>" width="100"/></a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div><!-- .thumb -->
    </div><!-- .product-image -->
    <div class="product-info">
        <div class="prod-price">
            <h3>R$ <?php echo decimal_to_reaisbr($dados_produto[0]->preco); ?></h3>
        </div><!-- .prod-price -->
        <div class="addToCart">
            <?php echo form_open(base_url() . 'restrito/carrinho/adicionar'); ?>
            <?php echo form_hidden('id', $dados_produto[0]->id); ?>
            <label for="qty">Quantidade:</label>
            <select name="qty" id="qty">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <?php echo form_hidden('price', $dados_produto[0]->preco); ?>
            <?php echo form_hidden('name', $dados_produto[0]->nome); ?>
            <input type="submit" name="buy" value="Comprar"/>
            <?php echo form_close(); ?>
        </div><!-- .addToCart -->
    </div><!-- .product-info -->
    <div class="clearfloat"></div>
    <div class="product-detail"><?php echo $dados_produto[0]->descricao; ?></div>
</div><!-- #content -->