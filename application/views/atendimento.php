</div>
<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">

	<h1 class="h1titulo">Home &raquo; Atendimento ao Cliente</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
          
            <p style="cursor:default; margin-left:40px;">
            	<span style=" font-weight:bold; font-style:italic;"> “A Metron tem o prazer em atende-lo e esclarecer dúvidas sobre atualização cadastral, financeiro e contrato. Preencha os dados ao lado e entraremos em contato.”</span>
            </p>
        <br />
               
                 <!-- conteudo aqui -->
                  <form id="formContato" action="<?php echo base_url() . 'cadastros/atendimento'; ?>" method="post">
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
                   		      <input type="text" name="ccel" id="ccel" />
               		  </div>
                            
                            <div class="diva">
                      		 <span class="label"> Selecione um item: </span>
                              	<select id="cdepto" name="cdepto" style="width:287px; height:32px;">
                                    <option value="Administração">Atualização Cadastral</option>
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Comercial">Contato</option>
                                </select>
                      		</div>
                            </div>
                        
                        
                     <div class="lado2">
                      		<div class="diva">
                              <span>Observação: </span>
                              <p>
                                <textarea name="coments" cols="" rows=""></textarea>
                              </p>
                              <div class="diva">
                              <span class="als alsdireita" style="padding-top:10px;">
                                <input name="button" type="submit" class="bbuscar" id="button" value="  Enviar  " />
                              </span>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                          </div>
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