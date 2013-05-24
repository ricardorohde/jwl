</div>
<div id="geral-baixo">
   <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Ligamos para você</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               
                  <!-- conteudo aqui -->
                  <form id="formContato" action="<?php echo base_url() . 'cadastros/ligamos'; ?>" method="post">
                      <div class="lado1">
                      		<div class="diva">
                      		  <span class="label">Nome: </span>
                      		  <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		 <span class="label"> E-mail: </span>
                      		    <input type="text" name="cemail" id="cemail" />
                   		</div>
                            
                            <div class="diva">
                      		  <span class="label">Telefone: </span>
                      		    <input type="text" name="ctel" id="ctel" />
                   		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Celular: </span>
                      		    <input name="ccel" type="text" id="ccel" />
           		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Melhor Horário: </span>
                      		    <input type="text" name="chora" id="chora" />
                   		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Melhor dia para Contato</span>
                      		    <input type="text" name="cdata" id="cdata" />
                      		</div>
                            
                            
                      </div>
                    <div class="lado2">
                      		<div class="diva">
                              <span>Comentários, dúvidas ou sugestões.                              </span>
                              <p>
                                <textarea name="coments" cols="" rows=""></textarea>
                              </p>
                              <span class="als">
                                <input name="novidades" type="checkbox" id="novidades" value="s" />
                                <label for="novidades"></label>
                              Receber informativos da Metron?
                             </span>
                              <span class="als alsdireita">
                                <input name="button" type="submit" class="bbuscar" id="button" value="  Enviar  " />
                              </span>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                          </div>
                      </div>
                   </form>
				  <!-- end conteudo -->
               
         </div>
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
      <?php $this->load->view('elementos/rodape');?>
      
</div>