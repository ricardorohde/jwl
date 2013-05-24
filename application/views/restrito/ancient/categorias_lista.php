<div id="content">
    <div class="container clearfix">
        <!--Statistics-->
        <!--Table-->
        <a href="<?php echo base_url() . 'restrito/categorias/cadastro'; ?>">  Nova Categoria Principal</a>
        <br /><br />

        <div class="box">
            <!--Title-->
            <div class="header">
                <h2><a href="#">Categorias Principais</a></h2>
                <!--Draggable-->
                <span class="draggable"></span>
                <!--Toggle-->
                <span class="toggle"></span></div>
            <!--Content-->
            <div class="content clearfix">
                <!--Table-->
                <table class="datatable">
                    <thead>
                        <tr>
                            <th class="sorting_asc">Categoria</th>
                            <th class="sorting"> Tipo </th>
                            <th class=""> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA odd">
                            <?php foreach ($categorias as $cat): ?>
                                <td class=" sorting_1"><strong><?php echo $cat->categoria; ?></strong></td>
                                <td class="center"><span class="line">Categoria Principal</span></td>
                                <td class="center">
                                    <a href="<?php echo base_url() . 'restrito/categorias/subcategorias/' . $cat->id; ?>"><img src="<?php echo base_url() . 'assets/imagens/backend/subcategoria.png' ?>" title="Gerenciar Subcategorias"/></a>
                                    <?php echo " | "; ?>
                                    <a href="<?php echo base_url() . 'restrito/categorias/alterar/' . $cat->id; ?>"><img src="<?php echo base_url() . 'assets/imagens/backend/edit.png' ?>" title="Editar"/></a>
                                    <?php echo " | "; ?>
                                    <a href="<?php echo base_url() . 'restrito/categorias/excluir/' . $cat->id; ?>" onclick="return confirm('Confirma a exclsão deste usuário?')"><img src="<?php echo base_url() . 'assets/imagens/backend/delete.png' ?>" title="Excluir"/></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--Forms-->
        <!--Tabs-->
        <!--Acordion-->
        <!--Inbox-->
        <!--Footer-->
