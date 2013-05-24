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
     <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/categorias/atributos_gravar'; ?>">
       <p>
         <label for="atributo">Nome do Atributo</label>
         <input type="text" name="atributo" id="atributo" class="medium" />
       </p>
       <p>
         <input name="idcategoria" type="hidden" id="idcategoria" value="<?php echo $filho; ?>">
       </p>
       <p><input name="cad" type="submit" value="Cadastrar" /></p>
     </form>
   </div>
  </div>