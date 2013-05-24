<div id="content">
 <div class="container clearfix"> 
  <!--Statistics--><!--Table--><!--Forms-->
  <div class="box">
   <div class="header">
    <h2>Alteração de Dados do Usuário</h2>
    <!--Draggable--> 
    <span class="draggable"></span> 
    <!--Toggle--> 
    <span class="toggle"></span> </div>
   <div class="content padding"> 
    <!--Form Elements-->
   <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
     <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/usuarios/alt'; ?>">
       <label for="usuario">Nome do Usuário</label>
       <input type="text" name="user" id="user" class="medium" value="<?php echo $dadosUsuario[0]->username; ?>" />
    
       <input type="hidden" name="idusers" id="idusers" value="<?php echo $dadosUsuario[0]->idusers; ?>" />
       <label for="logon">Login</label>
    
       <input type="text" name="loggin" id="loggin" value="<?php echo $dadosUsuario[0]->login; ?>" />
       <label for="senha">Senha</label>
    
       <input type="senha" name="senha" id="senha" value="<?php echo $dadosUsuario[0]->senha; ?>" />
       <label for="email">E-mail</label>
    
       <input type="text" name="email" id="email" class="medium" value="<?php echo $dadosUsuario[0]->email; ?>" />
       <br />
       <label for="ativo">Usuário Ativo?</label>
       <select id="ativo">
       	<option value="s" <?php if ($dadosUsuario[0]->ativo == 's') { echo 'selected="selected"'; } ?>>Sim</option>
       	<option value="n" <?php if ($dadosUsuario[0]->ativo == 'n') { echo 'selected="selected"'; } ?>>Não</option>        
       </select>
       
       
       <p><input name="cad" type="submit" value="Alterar" /></p>
     </form>
   </div>
  </div>


