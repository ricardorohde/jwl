<div id="content">
    <div class="container clearfix">
        <!--Statistics-->
        <!--Table-->
        <a href="<?php echo base_url() . 'restrito/categorias/cadastro/' . $filho; ?>">  Nova Categoria</a>
        <br /><br />

        <div class="box">
            <!--Title-->
            <div class="header">
                <h2><?php breadCrumb($filho); ?>
                    <?php
                    //invertendo o array
                    $novarray = array_reverse($_SESSION['breadcrumba']);
                    for ($i = 0; $i < count($novarray); $i++) {
                        echo '<a href="#">' . $novarray[$i] . "</a>";

                        if ($novarray[$i] != end($novarray)) {
                            echo " &raquo; ";
                        }
                    }
                    ?>

                </h2>
                </pre>

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
                            <th class="sorting"> Categoria de Origem </th>
                            <th class=""> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA odd">
                            <?php foreach ($categorias as $cat): ?>
                                <td class=" sorting_1"><strong><?php echo $cat->categoria; ?></strong></td>
                                <td class="center"><span class="line"><?php echo end($novarray); ?></span></td>
                                <td class="center">
                                    <a href="<?php echo base_url() . 'restrito/categorias/atributos/' . $cat->id; ?>"><img src="<?php echo base_url() . 'assets/imagens/backend/categoria.png' ?>" title="Atributos da Categoria"/></a>
                                    <?php echo " | "; ?>
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
