<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<div id="menulateralz">
	<div id="top_dropbox"></div>			
    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
            <option value="">Menu Principal - Selecione</a></option>
            <option value="<?php echo base_url()?>restrito/home/">Início</a></option>
            <option value="<?php echo base_url()?>restrito/noticias/">Notícias</a></option>
            <option value="<?php echo base_url()?>restrito/banners/">Banners</a></option>
            <option value="<?php echo base_url()?>restrito/imoveis/">Imóveis</a></option>
            <option value="<?php echo base_url()?>restrito/estados/">Estados</a></option>
            <option value="<?php echo base_url()?>restrito/cidades/">Cidades</a></option>
            <option value="<?php echo base_url()?>restrito/bairros/">Bairros</a></option>
            <option value="<?php echo base_url();?>restrito/editorias/ver/1">Texto Empresa</a></option>
            <option value="<?php echo base_url();?>restrito/home_info/ver/1">Dados da Home Page</a></option>
        <!--<option value="<?php echo base_url()?>restrito/clientes/">Clientes/Cadastros</a></option>
        <!--<option value="<?php echo base_url()?>restrito/indices/">Índices</a></option>-->
            
            
         <!--   <?php $x = geraMenu();
                foreach ($x as $j):
            ?>
               <option value="<?php echo base_url();?>restrito/editorias/ver/<?=@$j->idsite;?>"><?=@$j->secao; ?></a></option>
            <?php endforeach;?>-->
            <option value="">-------------------</option>
            <option value="<?php echo base_url()?>restrito/usuarios/">Usuários</a></option>
            <option value="<?php echo base_url()?>restrito/stats/">Controle do Sistema</option>
  </select>       
	     
</div>