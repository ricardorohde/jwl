<div id="content">
    <div id="link-cadastro">
        <p><a href="<?php echo base_url() . 'restrito/categorias/add' ?>" title="adicionar uma nova categoria"><img src="<?php echo base_url() . 'imgs/restrito/adicionar.png' ?>"/>Nova Categoria</a></p>
    </div><!-- #link-cadastro -->
    <div id="registros">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                <tr>
                    <td><?php echo $categoria->nome; ?></td>
                    <td><?php echo word_limiter($categoria->descricao, 10); ?></td>
                    <td class="line">
                        <a href="<?php echo base_url() . 'restrito/categorias/buscar/' . $categoria->id; ?>"><img src="<?php echo base_url() . 'imgs/restrito/edit.png' ?>" title="editar"/></a>
                        <?php echo " | "; ?>
                        <a href="<?php echo base_url() . 'restrito/categorias/excluir/' . $categoria->id; ?>" onclick="return confirm('Confirma a exclusão desta categoria?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png' ?>" title="excluir"/></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- #registros -->
    <div id="pages"><?php echo $paginas; ?></div>
</div><!-- #content -->