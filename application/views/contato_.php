
</div>
<div style="height:21px; clear:both;"></div>
<div id="divisor-flue-interno">
<div id="geral-baixo">

		<div class="boxe">
         <!-- bloco  -->
     	<?php $this->load->view('elementos/maisacessados'); //esse comando equivale ao include php ?>
     
     
        <div class="alinhaBt"><a href="#"><img src="<?=base_url();?>assets/imagens/frontend/arrow_right_mini.png" alt="Avançar" name="proximo" width="40" height="46" id="proximo" /></a></div></div>
        <!-- end bloco -->
        
         <!-- bloco  -->
        <div id="acompanhamento">
        	<h1 class="scond">Acompanhe a Obra</h1>
            <div class="obras">
				<?php $tchu = todosImoveis(); ?>
                <form id="lstobras" method="post" action="">
                <select id="lasobras" class="selectArea">
                    <?php foreach ($tchu as $tcha): ?>
	                	<option value="<?=$tcha->idimoveis?>"><?=$tcha->nome?></option>
                    <? endforeach; ?>
                 
                </select>
            </form>
            </div>
  </div>
        <!-- end bloco -->
        </div>
        
       

       
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Contato</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
               
                  <!-- conteudo aqui -->
                  <form id="formContato" action="" method="post">
                    <div class="lado1">
                      		<div class="diva">
                      		  <span class="label">Nome: </span>
                      		  <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		 <span class="label"> E-mail: </span>
                   		      <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		  <span class="label">Telefone: </span>
                   		      <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Celular: </span>
                   		      <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Departamento: </span>
                   		      <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Empreendimento: </span>
                   		      <input type="text" name="cnome" id="cnome" />
                      		</div>
                            
                            <div class="diva">
                      		  <span class="label">Cidade: </span>
                   		      <input type="text" name="cnome" id="cnome" />
                      		</div>
                      </div>
                    <div class="lado2">
                      		<div class="diva">
                              <span>Comentários, dúvidas ou sugestões.                              </span>
                              <p>
                                <textarea name="coments" cols="" rows=""></textarea>
                              </p>
                              <span class="als">
                                <input name="novidades" type="checkbox" id="novidades" value="S" />
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
      
      <div id="dados-contato">
      <p class="side1"><span class="tmetron"><img src="<?=base_url();?>assets/imagens/frontend/metron_cinza.jpg" width="100" height="19" alt="Metron" /></span><br />
        Av. Leitão da Silva, 1375 - Gurigica, Vitória - ES / CEP.: 29.046-005  </p>
      <p class="side2">Tel/fax: (27) 2104-7436<br />
        Central de Vendas EMPAR: (27) 3134-6800</p>
      </div>
      
</div>