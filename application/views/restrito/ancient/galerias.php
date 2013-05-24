<div id="content">
    <div id="link-cadastro">
        <p><a href="<?php echo base_url() . 'restrito/galerias/add' ?>" title="adicionar uma nova galeria"><img src="<?php echo base_url() . 'imgs/restrito/adicionar.png' ?>"/>Nova Galeria</a></p>
    </div><!-- #link-cadastro -->
    <div id="registros" style="margin-top: 10px;">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Produto</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($galerias as $galeria): ?>
                    <tr>
                        <td><a href="<?php echo base_url() . 'restrito/galerias/detalhes/' . $galeria->id; ?>"><?php echo $galeria->nome; ?></a></td>
                        <td class="line"><?php echo $galeria->nome_produto; ?></td>
                        <td class="line">
                            <a href="<?php echo base_url() . 'restrito/galerias/buscar/' . $galeria->id; ?>"><img src="<?php echo base_url() . 'imgs/restrito/edit.png' ?>" title="editar"/></a>
                            <?php echo " | "; ?>
                            <a href="<?php echo base_url() . 'restrito/galerias/excluir/' . $galeria->id; ?>" onclick="return confirm('Confirma a exclusão desta galeria?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png' ?>" title="excluir"/></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- #registros -->
    <div id="pages"><?php echo $paginas; ?></div>
</div><!-- #content -->