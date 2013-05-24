<div id="content">
  <div class="container clearfix">
    <!--Statistics-->
    <!--Table-->
  <a href="<?php echo base_url() . 'restrito2/usuarios/add'; ?>">  Novo Usuário</a>
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
              <th class="sorting_asc">Nome</th>
              <th class="sorting"> Grupo</th>
              <th class="sorting"> E-mail</th>
              <th class="sorting"> Login </th>
              <th class=""> Ações </th>
            </tr>
          </thead>
          <tbody>
           
            <tr class="gradeA odd">
              <td class=" sorting_1"><strong><?php echo '$usuario->nome'; ?></strong></td>
              <td><span class="line"><?php echo '$usuario->nome_grupo'; ?></span></td>
              <td><span class="line"><em><?php 'echo $usuario->email'; ?></em></span></td>
              <td class="center"><span class="line"><?php echo '$usuario->login'; ?></span></td>
              <td class="center">
                <a href="<?php echo base_url() . 'restrito2/usuarios/buscar/' . '$usuario->id'; ?>"><img src="<?php echo base_url() . 'imgs/restrito/edit.png' ?>" title="editar"/></a>
                        <?php echo " | "; ?>
                <a href="<?php echo base_url() . 'restrito2/usuarios/excluir/' . '$usuario->id'; ?>" onclick="return confirm('Confirma a exclsão deste usuário?')"><img src="<?php echo base_url() . 'imgs/restrito/delete.png' ?>" title="excluir"/></a>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
</div>

	    <!--Forms-->
    <!--Tabs-->
    <!--Acordion-->
    <!--Inbox-->
    <!--Footer-->
