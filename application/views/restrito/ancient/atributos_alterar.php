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
     <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/categorias/atributos_atualizar'; ?>">
       <p>
         <label for="atributo">Nome do Atributo</label>
         <input type="text" name="atributo" id="atributo" class="medium" value="<?php echo $dados_atributo[0]->atributo; ?>" />
       </p>
       <p>
         <input name="idcategoria" type="hidden" id="idcategoria" value="<?php echo $dados_atributo[0]->idcategoria; ?>">
         <input name="id" type="hidden" id="id" value="<?php echo $dados_atributo[0]->id; ?>">
       </p>
       <p><input name="cad" type="submit" value="Alterar Dados" /></p>
     </form>
   </div>
  </div>