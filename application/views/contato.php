</div>
<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">
                      
	<h1 class="h1titulo">Home &raquo; Contato</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
                              <p style="cursor:default; margin-left:40px;">
                              	<span style="color:#730002;font-size:18px; font-weight:bold; font-style:italic;">Nosso Endereço:</span>
                               <span style=" font-weight:bold; font-style:italic;"> Av.Leitão da Silva, 1375 - Gurigica, Vitória - ES | 
                                CEP.: 29.046-005
                                Tel/FAx:(27)3134-6800</span>
                              </p>
                              <br />
               
                  <!-- conteudo aqui -->
                  <form id="formContato" action="<?=base_url()?>home/enviar/" method="post">
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
                      		 <span class="label"> Departamento: </span>
                              	<select id="cdepto" name="cdepto" style="width:287px; height:32px;">
                                    <option selected="selected" value="">&nbsp;</option>
                                    <option value="Administração">Administração</option>
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Comercial">Comercial</option>
                                    <option value="Diretoria">Diretoria</option>
                                    <option value="SAC">SAC</option>
                                    <option value="Outros">Outros</option>
                                </select>
                      		</div>
                            
                            <div class="diva">
                      		 <span class="label"> Empreendimento: </span>
                              	<select id="cempr" name="cempr" style="width:287px; height:32px;">
                                    <option selected="selected" value="">&nbsp;</option>
                                    <option value="1">Veranno</option>
                                    <option value="3">Ideale</option>
                                    <option value="2">Felicitá</option>
                                    <option value="4">Naturale</option>
                                    <option value="36">Solar da Vila</option>
                                    <option value="5">Belvedere</option>
                                    <option value="6">Speranza</option>
                                    <option value="7">Vila dos Pássaros</option>
                                    <option value="41">Brise Residence</option>
                                    <option value="8">Riviera del Mar</option>
                                    <option value="9">Terrazas del Mar</option>
                                    <option value="19">Colorado</option>
                                    <option value="10">Mário Resende</option>
                                    <option value="11">Chácara Flora</option>
                                    <option value="39">Vila da Praia</option>
                                    <option value="12">Celebrity</option>
                                    <option value="13">Santorini</option>
                                    <option value="14">Enseada Tower</option>
                                    <option value="15">Allegro</option>
                                    <option value="16">Maison Praia</option>
                                    <option value="28">Solar de Jacaraípe</option>
                                    <option value="17">Verdesmares</option>
                                    <option value="18">Cristal</option>
                                    <option value="25">Bilbao</option>
                                    <option value="21">Niágara</option>
                                    <option value="22">Praia Place</option>
                                    <option value="23">Enseada Residence</option>
                                    <option value="24">Enseada Office</option>
                                    <option value="26">Privilége</option>
                                    <option value="30">Via Parque Laranjeiras</option>
                                    <option value="31">Solar de Jacaraípe</option>
                                    <option value="29">Solar de Jacaraípe</option>
                                    <option value="37">Via Laranjeiras</option>
                                    <option value="45">Teste</option>
                                    <option value="34">Enseada Residence</option>
                                    <option value="42">Via Flora Residencial</option>
                                    <option value="43">Via Flora Residencial</option>
                                    <option value="46">Vila da Praia</option>
                                    <option value="Outros">Outros</option>
                                </select>
                      		</div>
                            
                            <div class="diva">
                      		  <span class="label">Cidade: </span>
                   		      	<select id="ccidade" name="ccidade" style="width:287px; height:32px;">
                                    <option selected="selected" value="">&nbsp;</option>
                                    <option value="Vitoria">Vitória</option>
                                    <option value="VilaVelha">Vila Velha</option>
                                    <option value="Serra">Serra</option>
                                    <option value="Jacaraipe">Jacaraipe</option>
                                    <option value="Cariacica">Cariacica</option>
                                    <option value="Guarapari">Guarapari</option>
                                    <option value="Cachoeiro">Cachoeiro</option>
                                    <option value="Linhares">Linhares</option>
                                    <option value="Outros">Outras</option>
                                </select>
                      		</div>
                          
                        
                        <div class="diva">
                      		  <span class="label">Bairro: </span>
                   		      	<select id="cbairro" name="cbairro" style="width:287px; height:32px;">
                                    <option selected="selected" value="">&nbsp;</option>
                                    <option value="ataide">Ataíde</option>
                                    <option value="centro">Centro</option>
                                    <option value="cidade_continental">Cidade Continental</option>
                                    <option value="enseada_sua">Enseada do suá</option>
                                    <option value="jardim_camburi">Jardim Camburi</option>
                                    <option value="jardim_penha">Jardim da Penha</option>
                                    <option value="jardim_limoreiro">Jardim Limoeiro</option>
                                    <option value="laranjeiras_ii">Laranjeiras II</option>
                                    <option value="morada_laranjeiras">Morada de Laranjeiras</option>
                                    <option value="praia_cerca">Praia da Cerca</option>
                                    <option value="praia_costa">Praia da Costa</option>
                                    <option value="praia_itaparica">Praia de Itaparica</option>
                                    <option value="praia_snt_helena">Praia de Santa Helena</option>
                                    <option value="praia_canto">Praia do Canto</option>
                                </select>
                      		</div>
                        </div>   
                            
                        
                      <div class="lado2">
                      		<div class="diva">
                              <span>Comentários, dúvidas ou sugestões.                              </span>
                              <p>
                                <textarea name="ccoments" cols="" rows="" id="ccoments"></textarea>
                              </p>
                              <span class="als">
                                <input name="cnews" type="checkbox" id="cnews" value="s" />
                                <label for="cnews"></label>
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