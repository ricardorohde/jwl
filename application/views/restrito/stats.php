<style type="text/css">
#principal table tr th {
	color: #FFF;
}
</style>
<div id="principal">
<h2> Controle do sistema</h2>
	<h3 style="color:#666;">Para visualizar as atualiza&ccedil;&otilde;es mais recentes, clique em "N&ordm; Modific.".</h3>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>N&ordm; Modific.</th>
                    <th>Usuario</th>
                    <th>Ação</th>
                    <th>Data/Hora</th>
                    <th>Status</th>
                    <th>Modifica&ccedil;&atilde;o</th>
                  </tr>
                </thead>
                <tbody>
<?php 
		foreach ($estados as $stats): ?>
        <tr>
            <?php
            /*============== Conversor Data e Hora ==============*/
            $data_modificacao;$hora_modificacao;
            //======== DATA
            $data_modificacao = $stats->datahora;
            $data_modificado=substr($data_modificacao,0,10);
            $data_dia = substr($data_modificado,8,6);
            $data_mes = substr($data_modificado,5,2);
            $data_ano = substr($data_modificado,0,4);
            $data_br = $data_dia.'/'.$data_mes.'/'.$data_ano;
            
            //======== HORA
            $hora_modificacao = $stats->datahora;
            $hora_final=substr($hora_modificacao,11,5);
			?>
        
          <td align="center" width="1%"><?=$stats->id_stats?></td>
          <td align="center"><?=$stats->user?></td>
          <td align="center"><?=$stats->stats?></td>
          <td align="center"><?=$data_br?><br/><?=$hora_final?></td>
          <td align="center"><?=$stats->action?></td>
          <td align="center"><?=$stats->nome_stats_registro?></td>
          </tr>
          <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>N&ordm; Modific.</th>
                    <th>Usuario</th>
                    <th>Ação</th>
                    <th>Data/Hora</th>
                    <th>Status</th>
                    <th>Modifica&ccedil;&atilde;o</th>
                  </tr>
                </tfoot>
  </table>
<!--===========================================================             
  <table width="80%" align="center" cellpadding="5" cellspacing="0" id="tabela_stats">
        <tr>
          <th width="20%" class="title_table_stats" style="border-top-left-radius:5px;" scope="col">Usuario</th>
          <th width="20%" class="title_table_stats" scope="col">Ação</th>
          <th width="20%" class="title_table_stats" scope="col">Data/Hora</th>
          <th width="20%" class="title_table_stats" scope="col">Status</th>
          <th width="60%" class="title_table_stats" style="border-top-right-radius:5px;" scope="col">Modifica&ccedil;&atilde;o</th>
        </tr>
        <?php 
			$sty_1=0;$aux;
		foreach ($estados as $stats): ?>
        <tr>
            <?php
				if($sty_1 % 2 == 0){
					$aux = 'style_1';
				}else{
					$aux = 'style_2';
				}
            /*============== Conversor Data e Hora ==============*/
            $data_modificacao;$hora_modificacao;
            //======== DATA
            $data_modificacao = $stats->datahora;
            $data_modificado=substr($data_modificacao,0,10);
            $data_dia = substr($data_modificado,8,6);
            $data_mes = substr($data_modificado,5,2);
            $data_ano = substr($data_modificado,0,4);
            $data_br = $data_dia.'/'.$data_mes.'/'.$data_ano;
            
            //======== HORA
            $hora_modificacao = $stats->datahora;
            $hora_final=substr($hora_modificacao,11,5);
			?>
        
        
          <td align="center" class="<?=$aux;?>"><?=$stats->user?></td>
          <td align="center" class="<?=$aux;?>"><?=$stats->stats?></td>
          <td align="center" class="<?=$aux;?>"><?=$data_br?><br/><?=$hora_final?></td>
          <td align="center" class="<?=$aux;?>"><?=$stats->action?></td>
          <td align="center" class="<?=$aux;?>"><?=$stats->nome_stats_registro?></td>
        </tr>
        <?php 
			$sty_1++;
				endforeach; ?>
  </table>-->
  <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>