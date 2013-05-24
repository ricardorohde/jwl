<div id="content">
  <div class="container clearfix">
    <!--Statistics-->
    <!--Table-->
  <a href="<?php echo base_url() . 'restrito/usuarios/cadastro'; ?>">  Novo Usuário</a>
  <br /><br />

    <div class="box">
      <!--Title-->
      <div class="header">
        <h2><a href="#">Usuários</a></h2>
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
              <th class="sorting_asc">Usuário</th>
              <th class="sorting"> Login</th>
              <th class="sorting"> E-mail</th>
              <th class="sorting"> Tipo </th>
              <th class=""> Ações </th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($usuarios as $users): ?>
            <tr class="gradeA odd">
              <td class=" sorting_1"><strong><?php echo $users->usuario; ?></strong></td>
              <td><span class="line"><?php echo $users->login; ?></span></td>
              <td><span class="line"><em><?php echo $users->email; ?></em></span></td>
              <td class="center"><span class="line"><?php echo tipoCliente($users->tipo); ?></span></td>
              <td class="center">
                <a href="<?php echo base_url() . 'restrito/usuarios/alterar/' . $users->id; ?>"><img src="<?php echo base_url() . 'assets/imagens/backend/edit.png' ?>" title="editar"/></a>
                        <?php echo " | "; ?>
                <a href="<?php echo base_url() . 'restrito/usuarios/excluir/' . $users->id; ?>" onclick="return confirm('Confirma a exclsão deste usuário?')"><img src="<?php echo base_url() . 'assets/imagens/backend/delete.png' ?>" title="excluir"/></a>
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
