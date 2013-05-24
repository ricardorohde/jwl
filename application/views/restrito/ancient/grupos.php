<div id="content">
    <div id="link-cadastro">
        <p><a href="<?php echo base_url() . 'restrito/grupos/add' ?>" title="adicionar um novo grupo"><img src="<?php echo base_url() . 'imgs/restrito/adicionar.png' ?>"/>Novo Grupo</a></p>
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
                <?php foreach ($grupos as $grupo): ?>
                    <tr>
                        <td><?php echo $grupo->nome; ?></td>
                        <td class="line"><?php echo $grupo->descricao; ?></td>
                        <td class="line">
                            <a href="<?php echo base_url() . 'restrito/grupos/buscar/' . $grupo->id; ?>"><img src="<?php echo base_url() . 'imgs/restrito/edit.png' ?>" title="editar"/></a>
                            <?php echo " | "; ?>
                            <a href="<?php echo base_url() . 'restrito/grupos/excluir/' . $grupo->id; ?>" onclick="return confirm('Confirma a exclusão deste grupo?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png' ?>" title="excluir"/></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- #registros -->
    <!--    <div id="lista-cadastro">        
    <?php
    //foreach ($grupos as $grupo):
    //$link = anchor("restrito/grupos/buscar/" . $grupo->id, "<img src='" . base_url() . "imgs/restrito/edit.png' title='alterar' />");
    //$link .= nbs(2);
    //$link .= anchor("restrito/grupos/excluir/" . $grupo->id, "<img src='" . base_url() . "imgs/restrito/delete.png' title='excluir' />", "onclick=\"return confirm('Confirma a exclusão deste grupo?')\"");
    //$link .= " - " . $grupo->nome;
    //$ul[] = $link;
    //endforeach;
    //if (isset($ul)):
    //echo ul($ul);
    //else :
    //echo "<p>Nenhum grupo cadastrado!</p>";
    //endif;
    ?>
        </div> #lista-cadastro -->
    <div id="pages"><?php echo $paginas; ?></div>
</div><!-- #content -->