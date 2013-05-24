<div id="principal">
              <h1>Sistema de Administração do site</h1>
              <p><?=$this->session->userdata('nome_usuario')?>, se você está lendo essa mensagem, significa que está logado em nosso sistema. Abaixo, algumas dicas de segurança para sua conta:</p>
              <ol>
                <li>Jamais forneça sua senha a ninguém</li>
                <li>Ao utilizar o sistema num computador de fora da empresa, certifique-se de que se trata de uma estação segura. Evite lan-houses, cyber cafés e outros locais públicos.</li>
                <li>Não salve sua senha no navegador. Existem programas que roubam as senhas salvas!</li>
                <li>Altere seu login/senha periodicamente. Isso dificulta o trabalho dos hackers.</li>
              </ol>
              <h1>Especificações do Servidor de Hospedagem</h1>
              <ul>
                <li>Versão do Script CGI: <?php echo $_SERVER['GATEWAY_INTERFACE'];?></li>
                <li>Softwares do Servidor: <?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
                <li>Seu Navegador: <?php echo $_SERVER['HTTP_USER_AGENT'];?></li>
                <li>Servidor: <?php echo $_SERVER['REMOTE_ADDR'];?></li>
                <li>Diretório Raiz: <?php //echo $_SERVER['PATH_TRANSLATED'];
											echo $_SERVER['SERVER_NAME'];?></li>
              </ul>
<p>&nbsp;</p>
</div>
			<!-- espaço -->
             <div class="spacer"></div>