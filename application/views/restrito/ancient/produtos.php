<div id="content">
    <div id="link-cadastro">
        <p><a href="<?php echo base_url() . 'restrito/produtos/add' ?>" title="adicionar um novo produto"><img src="<?php echo base_url() . 'imgs/restrito/adicionar.png' ?>"/>Novo Produto</a></p>
    </div><!-- #link-cadastro -->
    <div id="buscar">
        <?php echo form_open(base_url() . 'restrito/produtos/busca'); ?>
        <?php echo form_input('busca'); ?>
        <?php echo form_submit('mysubmit', 'Buscar!'); ?>
        <?php echo form_close(); ?>
    </div><!-- #buscar -->
    <div id="registros">
        <?php $this->load->helper('conversor'); ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                    <th>Volume</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody> 
                <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><a href="<?php echo base_url() . 'restrito/produtos/detalhes/' . $produto->id; ?>"><?php echo $produto->nome; ?></a></td>
                    <td class="line"><?php echo $produto->nome_categoria; ?></td>
                    <td class="line">R$ <?php echo decimal_to_reaisbr($produto->preco); ?></td>
                    <td class="line"><?php echo litros_to_ml($produto->volume); ?> ml</td>
                    <td class="line">
                        <a href="<?php echo base_url() . 'restrito/produtos/buscar/' . $produto->id; ?>"><img src="<?php echo base_url() . 'imgs/restrito/edit.png' ?>" title="editar"/></a>
                        <?php echo " | "; ?>
                        <a href="<?php echo base_url() . 'restrito/produtos/excluir/' . $produto->id; ?>" onclick="return confirm('Confirma a exclusão deste produto?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png' ?>" title="excluir"/></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- #registros -->
    <div id="pages"><?php echo $paginas ?></div>
</div><!-- #content -->