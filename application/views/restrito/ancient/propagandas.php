<div id="content">
    <div id="link-cadastro">
        <p><a href="<?php echo base_url() . 'restrito/propagandas/add' ?>" title="adicionar uma nova propaganda"><img src="<?php echo base_url() . 'imgs/restrito/adicionar.png' ?>"/>Nova Propaganda</a></p>
    </div><!-- #link-cadastro -->
    <div id="registros">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Produto</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($propagandas as $propaganda): ?>
                    <tr>
                        <td><a href="<?php echo base_url() . 'restrito/propagandas/detalhes/' . $propaganda->id; ?>"><?php echo $propaganda->nome; ?></a></td>
                        <td class="line"><?php echo $propaganda->nome_produto; ?></td>
                        <td class="line">
                            <a href="<?php echo base_url() . 'restrito/propagandas/buscar/' . $propaganda->id; ?>"><img src="<?php echo base_url() . 'imgs/restrito/edit.png' ?>" title="editar"/></a>
                            <?php echo " | "; ?>
                            <a href="<?php echo base_url() . 'restrito/propagandas/excluir/' . $propaganda->id; ?>" onclick="return confirm('Confirma a exclusão desta propaganda?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png' ?>" title="excluir"/></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- #registros -->
    <div id="pages"><?php echo $paginas; ?></div>
</div><!-- #content -->