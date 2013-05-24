<div id="content">
 <div class="container clearfix"> 
  <!--Statistics--><!--Table--><!--Forms-->
  <div class="box">
   <div class="header">
    <h2>Cadastro</h2>
    <!--Draggable--> 
    <span class="draggable"></span> 
    <!--Toggle--> 
    <span class="toggle"></span> </div>
   <div class="content padding"> 
    <!--Form Elements-->
   <div id="errors"><?php echo validation_errors(); ?></div><!-- #errors -->
     <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/usuarios/add'; ?>">
       <label for="usuario">Nome do Usuário</label>
       <input type="text" name="usuario" id="usuario" class="medium" />
       
       <label for="Tipo">Tipo de Usuário</label>
       <select name="tipo" id="tipo">
       		<option value="">Selecione...</option>
            	<option value="1">Administrador</option>
                <option value="2">Anunciante</option>
                <option value="3">Comprador</option>
                
       </select>
       <label for="logon">Login</label>
       <input type="text" name="logon" id="logon" />
       
       <label for="senha">Senha</label>
       <input type="password" name="senha" id="senha" />
       
       <label for="email">E-mail</label>
       <input type="text" name="email" id="email" class="medium" />
       
       <label for="endereco">Endereço Completo</label>
       <textarea name="endereco" cols="50" class="medium" id="endereco"></textarea>
       
       <label for="uf">Selecione a Unidade Federativa</label>       
       <select name="uf" id="uf">
       		<option value="">Selecione...</option>
            <?php foreach ($estados as $uf):?>
            	<option value="<?php echo $uf->id; ?>"><?php echo $uf->nome_estado; ?></option>
            <?php endforeach; ?>
       </select>
       
        <label for="cidades">Selecione Cidade</label>       
            <select name="cidades">
                   <option value="" disabled="disabled">Selecione</option>
             </select>
<p><input name="cad" type="submit" value="Cadastrar" /></p>
     </form>
   </div>
  </div>


