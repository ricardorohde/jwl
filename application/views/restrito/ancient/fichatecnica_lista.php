<div id="content">
    <div class="container clearfix">
        <!--Statistics-->
        <!--Table-->
        <a href="<?php echo base_url() . 'restrito/fichatecnica/cadastro'; ?>">Novo Item</a>
        <br /><br />

        <div class="box">
            <!--Title-->
            <div class="header">
                <h2><a href="#">Itens das Fichas Técnicas</a></h2>
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
                            <th class="sorting_asc">Id</th>
                            <th class="sorting"> Item </th>
                            <th class=""> Ações </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeA odd">
                            <?php foreach ($fichas as $cat): ?>
                                <td class=" sorting_1"><strong><?php echo $cat->id; ?></strong></td>
                                <td class="center"><span class="line"><?php echo $cat->item; ?></span></td>
                                <td class="center">
                                    <a href="<?php echo base_url() . 'restrito/fichatecnica/alterar/' . $cat->id; ?>"><img src="<?php echo base_url() . 'assets/imagens/backend/edit.png' ?>" title="Editar"/></a>
                                    <?php echo " | "; ?>
                                    <a href="<?php echo base_url() . 'restrito/fichatecnica/excluir/' . $cat->id; ?>" onclick="return confirm('Confirma a exclsão deste registro?')"><img src="<?php echo base_url() . 'assets/imagens/backend/delete.png' ?>" title="Excluir"/></a>
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
