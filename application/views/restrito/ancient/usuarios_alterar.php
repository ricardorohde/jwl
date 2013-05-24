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
       <input type="text" name="usuario" id="usuario" class="medium" value="<?php echo $dadosUsuario[0]->usuario; ?>" />
       <input type="hidden" name="iduser" id="iduser" value="<?php echo $dadosUsuario[0]->id; ?>" />
       <label for="Tipo">Tipo de Usuário</label>
       <select name="tipo" id="tipo">
       		<option value="">Selecione...</option>
            	<option value="1" <?php if ($dadosUsuario[0]->tipo == "1") { echo "selected='selected'"; }?>>Administrador</option>
                <option value="2" <?php if ($dadosUsuario[0]->tipo == "2") { echo "selected='selected'"; }?>>Anunciante</option>
                <option value="3" <?php if ($dadosUsuario[0]->tipo == "3") { echo "selected='selected'"; }?>>Comprador</option>
                
       </select>
       <label for="logon">Login</label>
       <input type="text" name="logon" id="logon" value="<?php echo $dadosUsuario[0]->login; ?>" />
       
       <label for="senha">Senha</label>
       <input type="senha" name="senha" id="senha" value="<?php echo $dadosUsuario[0]->senha; ?>" />
       
       <label for="email">E-mail</label>
       <input type="text" name="email" id="email" class="medium" value="<?php echo $dadosUsuario[0]->email; ?>" />
       
       <label for="endereco">Endereço Completo</label>
       <textarea name="endereco" cols="50" class="medium" id="endereco" ><?php echo trim($dadosUsuario[0]->endereco); ?>
       </textarea>
       
       <label for="uf">Selecione a Unidade Federativa</label>       
       <select name="uf" id="uf">
       		<option value="">Selecione...</option>
            <?php foreach ($estados as $uf):?>
            	<option value="<?php echo $uf->id; ?>" <?php if ($dadosUsuario[0]->uf == $uf->id) { echo "selected='selected'"; }?>><?php echo $uf->nome_estado; ?></option>
            <?php endforeach; ?>
       </select>
       <input type="hidden" id="citysel" name="citysel" value="<?php echo $dadosUsuario[0]->cidade; ?>" />
        <label for="cidades">Selecione Cidade</label>       
         
         <select name="cidades">
             <?php foreach ($listaCidades as $citis): ?>
                    <option value="<?php echo $citis->id; ?>" <?php if ($citis->id == $dadosUsuario[0]->cidade) { echo "selected='selected'"; } ?> ><?php echo $citis->nome_cidade; ?></option>
             <?php endforeach; ?>
         </select>
<p><input name="cad" type="submit" value="Alterar" /></p>
     </form>
   </div>
  </div>


