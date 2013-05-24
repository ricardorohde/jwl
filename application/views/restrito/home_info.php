</head>
<body>

<div id="principal">
              <h2>Dados da Home Page </h2>

              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                  	<th>Texto Site</th>
                    <th>Telefone</th>
                    <th>Qnt imoveis Destaque</th>
                    <th>Email</th>
                    <th>Endereco</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Youtube</th>
                    <th>Skype</th>
                    <th>Mapa</th>
                    <th>Acao</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($home_info as $secao):?>
                  <tr>
                  	<td width="5%" align="center"><?=$secao->texto_saudacao; ?></td>
                    <td width="5%" align="center"><?=$secao->tel_home; ?></td>
                    <td width="5%" align="center"><?=$secao->qnt_destaque; ?></td>
                    <td width="5%" align="center"><?=$secao->email_home; ?></td>
                    <td width="5%" align="center"><?=$secao->endereco_home; ?></td>
                    <td width="5%" align="center"><?=$secao->facebook; ?></td>
                    <td width="5%" align="center"><?=$secao->twitter; ?></td>
                    <td width="5%" align="center"><?=$secao->youtube; ?></td>
                    <td width="5%" align="center"><?=$secao->skype; ?></td>
                    <td width="5%" align="center">Link do Mapa</td>

                    
                    <td width="5%" align="center">
                    <a href="<?php echo base_url() . 'restrito/home_info/alterar/' . $secao->id; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
    
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                  	<th>Texto Site</th>
                    <th>Telefone</th>
                    <th>Qnt imoveis Destaque</th>
                    <th>Email</th>
                    <th>Endereco</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Youtube</th>
                    <th>Skype</th>
                    <th>Mapa</th>
                    <th>Acao</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>