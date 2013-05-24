<div id="content">
    <div id="carrinho">
        <h3>Seu Carrinho de Compras</h3>
        <?php echo form_open(base_url() . 'restrito/carrinho/atualizar'); ?>
        <table>
            <thead>
                <tr>
                    <th>Quantidade</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Subtotal</th>
                </tr>            
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($this->cart->contents() as $items): ?>
                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                    <tr>
                        <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                        <td><?php echo $items['name']; ?></td>
                        <td class="subtotal"><?php echo decimal_to_reaisbr($this->cart->format_number($items['price'])); ?></td>
                        <td class="subtotal"><?php echo decimal_to_reaisbr($this->cart->format_number($items['subtotal'])); ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"></td>
                    <td><strong>Total</strong></td>
                    <td class="total">R$ <?php echo decimal_to_reaisbr($this->cart->format_number($this->cart->total())); ?></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" name="edit" value="Atualizar Carrinho"/>
        <?php echo form_close(); ?>
    </div><!-- #carrinho -->
    <div class="cart-destroy">
        <a href="<?php echo base_url() . 'restrito/carrinho/cancelar' ?>">Cancelar Compra!</a>
    </div>
</div><!-- #content -->