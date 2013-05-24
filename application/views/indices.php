</div>
<div id="geral-baixo">
    <div class="espacer"></div>
<div id="noticias-home">
	<h1 class="h1titulo">Home &raquo; Índices</h1>
            <div id="tpnoticias"></div>
   		  <div class="interno-conteudo">
          	   <?php function extMes($mes) {
				  		
							switch ($mes) {
							
								case 1:
								$retorno = "Jan";
								break;
								
								case 2:
								$retorno = "Fev";
								break;
								
								case 3:
								$retorno = "Mar";
								break;
								
								case 4:
								$retorno = "Abr";
								break;
								
								case 5:
								$retorno = "Mai";
								break;
								
								case 6:
								$retorno = "Jun";
								break;
								
								case 7:
								$retorno = "Jul";
								break;
								
								case 8:
								$retorno = "Ago";
								break;
								
								case 9:
								$retorno = "Set";
								break;
								
								case 10:
								$retorno = "Out";
								break;
								
								case 11:
								$retorno = "Nov";
								break;
								
								case 12:
								$retorno = "Dez";
								break;
								
								case 13:
								case 0:
								$retorno = "Acumulado";
							
							}
							
							return ($retorno);					
				  }?>
               <?php foreach ($anos as $ano): ?>
               
   			<h2 class="tabletit"><?=$ano->ano; ?></h1>
                        
                        <table cellspacing="0" cellpadding="0" class="tindex">
                              <tr class="ttop">
                                <td rowspan="2"  align="center">Mês</td>
                                <td colspan="2"  align="center">CUB ES</td>
                                <td width="100" align="center">IGPM</td>
                                <td width="90" align="center">TR</td>
                                <td width="115" align="center">Poupança</td>
                                <td width="100" align="center">IPCA</td>
                              </tr>
                              <tr class="ttop">
                                <td align="center">Var. %</td>
                                <td align="center">Valor R$</td>
                                <td align="center">Var. %</td>
                                <td align="center">Var. %</td>
                                <td align="center">Var. %</td>
                                <td align="center">Var. %</td>                              
                              </tr>
                              
                              <?php foreach ($indices as $ind): 
							  			if ($ind->ano == $ano->ano) {
							  ?>
                              
                              <tr class="tcont">
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'vermelho'; } ?>"><?=extMes($ind->mes)?></td>
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'bolder'; } ?>"><?=$ind->cubvar?></td>
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'bolder'; } ?>"><? if ($ind->cubval == 0) { echo '-'; } else { echo $ind->cubval; }?></td>
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'bolder'; } ?>"><?=$ind->igpmvar?></td>
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'bolder'; } ?>"><?=$ind->trvar?></td>
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'bolder'; } ?>"><?=$ind->poupvar?></td>
            <td  align="center" class="<?php if ($ind->mes == 0 || $ind->mes == 13) { echo 'bolder'; } ?>"><?=$ind->ipcavar?></td>
                              </tr>
                              
                              <?php
										} //end do if
							   endforeach; ?>
                            </table>
                        		
               
               <?php endforeach; ?> 
               
            <!-- conteudo aqui -->
               
         </div>
   <div id="rdpnoticias"></div>   
  </div>
  <div class="espacer"></div>
    <div class="espacer"></div>
      <div class="espacer"></div>
      
     <?php $this->load->view('elementos/rodape');?>
      
</div>