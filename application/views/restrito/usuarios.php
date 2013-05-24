
<div id="principal">
              <h2>Usuários &raquo; Novo </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/usuarios/add'; ?>">
                <p>Nome <br />
                  <label for="username"></label>
                <input name="username" type="text" value="" class="campotexto" id="username" size="50" />
                </p>
                <p>Login <br />
                  <label for="login"></label>
                  <input name="login" type="text" value="" class="campotexto" id="login" size="30" />
</p>
                <p>Senha<br />
                  <label for="senha"></label>
                  <input name="senha" type="password" value="" class="campotexto" id="senha" size="25" />
</p>
                <p>Confirme a Senha<br />
                  <label for="senha2"></label>
                  <input name="senha2" type="password" value="" class="campotexto" id="senha2" size="25" />
                  <label for="pertencea"></label>
                </p>
                <p>E-mail<br />
                  <label for="email"></label>
                  <input name="email" type="text" value="" class="campotexto" id="email" size="50" />
                </p>
                <p>Ativo no site?<br />
                  <label>
                    <input type="radio" name="ativo" value="s" id="ativo_0" />
                    Sim</label>
                  <br />
                  <label>
                    <input type="radio" name="ativo" value="n" id="ativo_1" />
                    Não</label>
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="Cadastrar" class="botao" />
                </p>
</form>
  <h2> Já Cadastradas No sistema</h2>
              <table width="95%" border="0" cellpadding="0" cellspacing="0" class="display" id="example">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($usuarios as $secao): ?>
                  <tr>
                    <td width="40%"><?=$secao->username; ?></td>
                    <td width="30%" align="center"><?=$secao->login; ?></td>
                    <td width="15%" align="center"><?=$secao->ativo; ?></td>
                    <td width="15%">
                    <a href="<?php echo base_url() . 'restrito/usuarios/alterar/' . $secao->idusers; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_edit.png" alt="Editar Registro" width="16" height="16" border="0" /></a>
                    <a onclick="return confirm('Exclusão é definitiva e não há retorno. Tem certeza de que deseja apagar?');" href="<?php echo base_url() . 'restrito/usuarios/apagar/' . $secao->idusers; ?>"><img src="<?=base_url();?>assets/imagens/icons/application_delete.png" alt="Apagar Registro" width="16" height="16" border="0" /></a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                  </tr>
                </tfoot>
  </table>
              <p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>