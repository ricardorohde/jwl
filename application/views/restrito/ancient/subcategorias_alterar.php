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
     <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/categorias/alt'; ?>">
       <p>
         <label for="categoria">Nome da Categoria </label>
         <input type="text" name="categoria" id="categoria" class="medium" value="<?php echo $categorias[0]->categoria; ?>" />
       </p>
       <p>
         <input name="pai" type="hidden" id="pai" value="<?php echo $categorias[0]->pai; ?>">
         <input name="id" type="hidden" id="id" value="<?php echo $categorias[0]->id; ?>">
       </p>
       <p><input name="cad" type="submit" value="Alterar Dados" /></p>
     </form>
   </div>
  </div>