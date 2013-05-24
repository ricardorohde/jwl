<div id="header"> 
  <!--Container-->
  <div class="container clearfix"> 
    <!--Logo--> 
    <img id="logo" src="<?php echo base_url() . 'assets/imagens/backend/logo.png'; ?>" alt="logo" />
    <div class="loggedIn">Olá Aristeu Policarpo, você está conectado.</div>
    <!--Menu--> 
    <!--Navigation-->
    <ul class="clearfix" id="navigation">
      <li class="current"><a <?php if ($secao == "home") echo 'class="current"'; ?> href="<?php echo base_url() . 'restrito/principal'; ?>"><img alt="dashboard" class="icon" src="<?php echo base_url() . 'assets/imagens/backend/dashboard.png'; ?>"/>Home</a></li>
      <li><a <?php if ($secao == "usuarios") echo 'class="current"'; ?> href="#" ><img alt="inbox" class="icon" src="<?php echo base_url() . 'assets/imagens/backend/inbox.png'; ?>"/>Usuários</a>
        <ul>
          <li><a href="<?php echo base_url() . 'restrito/usuarios/cadastro'; ?>" title="Novo">Novo Usuário</a></li>
          <li><a href="<?php echo base_url() . 'restrito/usuarios'; ?>" title="Listar">Listar Usuários</a></li>
          
        </ul>
      </li>
      <li> <a <?php if ($secao == "produtos") echo 'class="current"'; ?> href="#"><img alt="colors" class="icon" src="<?php echo base_url() . 'assets/imagens/backend/colors.png'; ?>"/>Produtos</a>
        <ul>
          <li><a href="<?php echo base_url() . 'restrito/categorias'; ?>" rel="normal" class="styleswitch">Gerenciar Categorias/Subcategorias</a></li>
          <li><a href="#" rel="color1" class="styleswitch">Gerenciar Produtos</a></li>
          <li><a href="#" rel="color2" class="styleswitch">Galerias dos Produtos</a></li>
        </ul>
      </li>
      
      <li> <a <?php if ($secao == "dados") echo 'class="current"'; ?> href="#"><img alt="colors" class="icon" src="<?php echo base_url() . 'assets/imagens/backend/suporte.png'; ?>"/>Configurações</a>
        <ul>
          <li><a href="<?php echo base_url() . 'restrito/fichatecnica'; ?>" rel="normal" class="styleswitch">Questões das Fichas Técnicas</a></li>
          <li><a href="#" rel="color1" class="styleswitch">Criar Ficha Técnica para Categoria</a></li>
          <li><a href="#" rel="color2" class="styleswitch">Ver Fichas Técnicas Criadas</a></li>
        </ul>
      </li>
      
      <li> <a <?php if ($secao == "propagandas") echo 'class="current"'; ?> href="#"><img alt="layout" class="icon" src="<?php echo base_url() . 'assets/imagens/backend/layout.png'; ?>"/>Propagandas</a> </li>
      <li><a href="http://themeforest.com/" title="Navigation with Link" target="_new"><img alt="statistics" class="icon" src="<?php echo base_url() . 'assets/imagens/backend/statistics.png'; ?>"/>Sair</a></li>
      <li class="separator"></li>
    </ul>
    <!--end container--> 
  </div>
  <!--end #header--> 
</div>
