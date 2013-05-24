
<div id="principal">
              <h2>Usuários &raquo; Alteração </h2>
              <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'restrito/usuarios/alt'; ?>">
                <p>Nome <br />
                  <label for="username"></label>
                <input name="username" type="text" class="campotexto" id="username" value="<?=$usuarios[0]->username;?>" size="50" />
                </p>
                <p>Login <br />
                  <label for="login"></label>
                  <input name="login" type="text" class="campotexto" id="login" value="<?=$usuarios[0]->login;?>" size="30" />
                  <input name="retorno" type="hidden" id="retorno" value="<?=$retorno?>" />
                </p>
                <p>Senha<br />
                  <label for="senha"></label>
                  <input name="senha" type="password" class="campotexto" id="senha" value="<?=$usuarios[0]->senha;?>" size="25" />
</p>
                <p>Confirme a Senha<br />
                  <label for="senha2"></label>
                  <input name="senha2" type="password" class="campotexto" id="senha2" value="<?=$usuarios[0]->senha;?>" size="25" />
                  <label for="pertencea"></label>
                  <input name="idusers" type="hidden" id="idusers" value="<?=$usuarios[0]->idusers;?>" />
                </p>
                <p>E-mail<br />
                  <label for="email"></label>
                  <input name="email" type="text" class="campotexto" id="email" value="<?=$usuarios[0]->email;?>" size="50" />
                </p>
                <p>Ativo no site?<br />
                  <label>
                    <input name="ativo" type="radio" id="ativo_0" value="s" <?php if ($usuarios[0]->ativo == 's') { echo "checked='checked'";} ?> />
                    Sim</label>
                  <br />
                  <label>
                    <input type="radio" name="ativo" value="n" id="ativo_1" <?php if ($usuarios[0]->ativo == 'n') { echo "checked='checked'";} ?>/>
                    Não</label>
                  <br />
                  <br />
                  <input type="submit" name="button" id="button" value="Alterar" class="botao" />
                </p>
  </form>
</div>
			<!-- espaço -->
             <div class="spacer"></div>