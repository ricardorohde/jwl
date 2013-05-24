// JavaScript Document
$(document).ready(function(){

    		jQuery('ul.sf-menu').superfish();
			
	$('#pcity').submit(function(){
		
	});
	
	$('#selfotos').change(function(){
		var idi = $('#elimnovel').val();
		var dt  = $('#selfotos').val();

		  $('#magens').load(base_url + 'imoveis/fotos/'+idi+'/'+dt);
		  		
	});
	
	
	$('#fechapopup').click(function(){
		$('#popupa').hide(500);
	});
	
	
		$(".gruimg a").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
	
	/* change automatico - acompanhamento de obras */
	$('#lasobras').change(function(){
	     var id = $('#lasobras').val();
		 if (id != "") {
		 window.location.href = base_url + 'imoveis/acompanhamento/' + id;
		 }
	});
	
	/* Validação da busca do topo */
	$("#buscatopo").submit(function(){
			valor = $("#procura").val();
			if (valor == "" || valor == 'Buscar') {
		    alert('Não é possível realizar uma busca em branco!');
			return false;
			} else {
			$(this).submit();
			}
	});
	
	$('#carousel').cycle({
		fx:   		'scrollHorz',
		prev: 		'#prev',
		next: 		'#next'
	});
	
	$('#maisacc').cycle({
		fx:   		'scrollHorz',
		next: 		'#proximo',
		delay: -1000 
	});

	$('#banner') 
			.before('<div id="nav">') 
			.cycle({ 
				fx:     'fade', 
				speed:  'slow', 
				timeout: 6500, 
				pager:  '#nav' 
			});
		
		
		/* -- nova busca de imóveis com fancybox --*/	
		
		
		$("#selCidade").click(function(){
			$(this).fancybox({
				
					
					'autoScale': true,
					'transitionIn': 'fade',
					'transitionOut': 'fade',
					'type': 'iframe'
					
					//'href': 'http://www.sovilavelha.com.br/promocoes.php'
			
			});
			return false;
		});
		
		
		
		
		
		/* -- Final da nova busca -- */
    
	
	/*---------------------------- busca inferior (imoveis) ----------- */
	
	$("#bcidade").change(function(){
		valor = $(this).val();
		if (valor != "") {
			$('#bbairro').load(base_url + 'imoveis/getbairros/' + valor);
		} 
	});


	$("#bbairro").change(function(){
		valor = $(this).val();
		if (valor != "") {
			$('#btipo').load(base_url + 'imoveis/gettipos/' + valor);
		}
	});
	
	
	
	$(".bbuscar").click(function(){
		var cidade = $('#bcidade').val();
		var bairro = $('#bbairro').val();
		var tipo = $('#btipo').val();
		
		if (cidade == "Cidade" || cidade == ""){
			alert('É necessário escolher uma das opções de cidade para continuar.');
			return false;
		}


		if (bairro == "Bairro" || bairro == "" || bairro == "Selecione"){
			alert('É necessário escolher uma das opções de bairro para continuar.');
			return false;
		}


		if (tipo == "Tipo" || tipo == "" || tipo == "Selecione"){
			alert('É necessário escolher uma tipo de imóvel para continuar.');
			return false;
		}
		
		
		$("#buscaImoveis").submit();
		
		
	});
	
	
	/* 
	
	$("#btipo").change(function(){
		valor = $(this).val();
		if (valor != "") {
			$('#bempr').load(base_url + 'imoveis/getempr/' + valor);
		}
	});
	
	
	
	*/
	
	
	
	
	
	/* Js do menu (mais precisamente submenus.) principal do site */
	// por: Gabriel Pinheiro
	
	
	
	
/*	
	//todos os submenus ficam escondidos
	$("#menuprin li ul").hide();
	
	//ao passar o mouse sobre o item 1, esconder o restante
	$("#m1").mouseover(function(){
		$("#m1").addClass("menuAtivo");
		$("#m2").removeClass("menuAtivo");
		$("#m3").removeClass("menuAtivo");

	});
	
	
	//end menu 1
	
	
	//ao passar o mouse sobre o item 2, esconder o restante
	$("#m2").mouseover(function(){

		$("#m2").addClass("menuAtivo");
		$("#m1").removeClass("menuAtivo");
		$("#m3").removeClass("menuAtivo");

	});
	
	 
	//end menu 2
	
	
	//ao passar o mouse sobre o item 3, esconder o restante
	$("#m3").mouseover(function(){
		$("#m3").addClass("menuAtivo");
		$("#m2").removeClass("menuAtivo");
		$("#m1").removeClass("menuAtivo");

	});
	
	 
	//end menu 3
	
	//limpando os submenus

	$(".limp").mouseover(function(){
		//remove os over
		$("#m1").removeClass("menuAtivo");
		$("#m2").removeClass("menuAtivo");
		$("#m3").removeClass("menuAtivo");
		//esconde os submenus
		$("#subm1").hide(500);
		$("#subm2").hide(500);
		$("#subm3").hide(500);

		
	});
	//end menu 1
	*/
	//estilizando a barra de rolagem de notícias na home
	$('.homenoticias').jScrollPane();
	$('.home_destaque').jScrollPane();
	
	
});
//CORRETOR ON LINE LATERAL
			function CorretorOnLineLateral() {
				$(document).ready(function() {
					var y_fixo = $("#abaLateral").offset().top;
					$(window).scroll(function() {
						$("#abaLateral").animate({
							top: y_fixo + $(document).scrollTop() + "px"
						}, { duration: 450, queue: false }
					);
					});
				});
			}			
			function fix(btn) {
				var botao = btn;
				if (botao == 'btnFixar') {
					document.getElementById("abaLateral").className = "abaNoScroll";
					document.getElementById("btnFixar").style.display = 'none';
					document.getElementById("btnDestravar").style.display = 'block';
				}
				if (botao == 'btnDestravar') {
					document.getElementById("abaLateral").className = "abaScroll";
					document.getElementById("btnFixar").style.display = 'block';
					document.getElementById("btnDestravar").style.display = 'none';
				}
			}
			CorretorOnLineLateral();
	
//FIM CORRETOR ON LINE LATERAL

function chamaFancybox(){

	$(".gruimg a").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
}

function show(id)
{
	var obj = document.getElementById(id);
	obj.className = "mostraObj";
}
function hide(id)
{
	var obj = document.getElementById(id);
	obj.className = "ocultaObj";
}

function corretor()
{
alert('Desculpe-nos pelo transtorno. \nEM BREVE.');
//	window.open('corretor.php','','width=350,height=300');
}

function o(id)
{
	return document.getElementById(id);
}
function pularcampo(wobj,alvo,maxleght){
 if (wobj.value.length==maxleght){
  alvo.focus();
 }
}
function favorito()
{
	var url      = "http://www.metronengenharia.com.br";
    var title    = "Metron Engenharia - Imóveis à venda - Apartamentos, Casas, Condomínios e Empreendimentos no Espírito Santo";
    if (window.sidebar) window.sidebar.addPanel(title, url,"");
    else if(window.opera && window.print){
        var mbm = document.createElement('a');
        mbm.setAttribute('rel','sidebar');
        mbm.setAttribute('href',url);
        mbm.setAttribute('title',title);
        mbm.click();
    }
    else if(document.all){window.external.AddFavorite(url, title);}
}
function selTodosCheckBox(obj,id)
{
		lista = obj.parentNode;
		
		if(obj.checked)
		{
			document.getElementById(id).value = obj.value;
		}else
		{
			document.getElementById(id).value = "";
		}
		for(var i=0;i<lista.childNodes.length;i++)
		{
			if(lista.childNodes[i].nodeType==1)
			{
				o = lista.childNodes[i];
				
				if(o==obj)
				continue;
				
				if(o.type && o.type=='checkbox')
					if(obj.checked)
					{
						o.checked=false;
						o.disabled=true;
					}
					else
					{
						o.disabled=false;
					}
				
			}
		}
}
function selCheckBox(obj,id)
{
		lista = obj.parentNode;
		
		valores = new Array();
		
		j=0;
		for(var i=0;i<lista.childNodes.length;i++)
		{
			if(lista.childNodes[i].nodeType==1)
			{
				o = lista.childNodes[i];
				
				if(o.type && o.type=='checkbox')
					if(o.checked)
					{
						valores[j] = o.value;
						j++;
					}
				
			}
		}
		document.getElementById(id).value = valores.join(', ');
}
function abre(id) {

		var atual = id;
	
		if(document.getElementById('apresentacao'))
		document.getElementById('apresentacao').style.display = "none";
		
		if(document.getElementById('plantas'))
		document.getElementById('plantas').style.display = "none";
		
		if(document.getElementById('perspectivas'))
		document.getElementById('perspectivas').style.display = "none";
		
		if(document.getElementById('lazer_servicos'))
		document.getElementById('lazer_servicos').style.display = "none";
		
		if(document.getElementById('localizacao'))
		document.getElementById('localizacao').style.display = "none";
		
		if(document.getElementById('videos'))
		document.getElementById('videos').style.display = "none";
		
		if(document.getElementById('valores'))
		document.getElementById('valores').style.display = "none";
		
		if(document.getElementById('realizacao'))
		document.getElementById('realizacao').style.display = "none";
		
		if(document.getElementById('acompanhe'))
		document.getElementById('acompanhe').style.display = "none";
		
		if(document.getElementById('indique'))
		document.getElementById('indique').style.display = "none";
		
		if(document.getElementById('central_vendas'))
		document.getElementById('central_vendas').style.display = "none";
		
		if(document.getElementById(atual))
		document.getElementById(atual).style.display="block";
}

function cor(obj){
	obj.style.background="#cccccc";
	obj.style.cursor="pointer";
}
function sem_cor(obj){
	obj.style.background="#e2e2e2";
}

function endereco(qual){
	var qual;
	location.href=qual;
}

//formulario padrao:::::::::::::::::::::::::::::
var campos = new Array();
var ultimofml = null;

function checaIndique(fml)
{
	campo='indique';
	var i = 0;
	var j = 'Campos obrigatórios não preenchidos:\n\n';
	
	if (fml[campo+'[de_nome]'].value.length == 0) {
		j += ++i + ') Nome\n';
	}
	if (fml[campo+'[de_email]'].value.length == 0) {
		j += ++i + ') Email\n';
	}
	
	if (fml[campo+'[para_nome]'].value.length == 0) {
		j += ++i + ') Nome do amigo(a)\n';
	}
	if (fml[campo+'[para_email]'].value.length == 0) {
		j += ++i + ') Email do amigo(a)\n';
	}
	if (i > 0) {
		alert(j);
		return false;
	} else {
		enviaFormPadrao(fml,campo);
		return false;
	}
}
function checaFormPadrao(fml,campo)
{
	var i = 0;
	var j = 'Campos obrigatórios não preenchidos:\n\n';
	
	
	if(campo == 'cadastro')
	{
			if (fml[campo+'[voce_e]'].value.length == 0) {
				j += ++i + ') Você é\n';
			}
	}
	
	
	
	if (fml[campo+'[nome]'].value.length == 0) {
		j += ++i + ') Nome\n';
	}
	if (fml[campo+'[email]'].value.length == 0) {
		j += ++i + ') Email\n';
	}
	
	if(campo != 'cadastro')
	{
		if ( (fml[campo+'[dddtel]'].value.length == 0 || fml[campo+'[tel]'].value.length == 0) && (fml[campo+'[dddcel]'].value.length == 0 || fml[campo+'[cel]'].value.length == 0)  ) {
			j += ++i + ') Telefone ou Celular\n';
		}
	}
	
	if(campo == 'fale')
	{
			if (fml[campo+'[departamento]'].value.length == 0) {
				j += ++i + ') Departamento\n';
			}
			if (fml[campo+'[cidade]'].value.length == 0) {
				j += ++i + ') Cidade\n';
			}
	}
	
	if(campo == 'agende' || campo == 'ligue')
	{
			if (fml[campo+'[melhor_dia]'].value.length == 0) {
				j += ++i + ') Melhor dia para contato\n';
			}
			if (fml[campo+'[melhor_horario]'].value.length == 0) {
				j += ++i + ') Melhor horário\n';
			}
	}
	if(campo == 'assistencia')
	{
			if (fml[campo+'[empr_id]'].value.length == 0 && fml[campo+'[empreendimento]'].value.length == 0) {
				j += ++i + ') Empreendimento\n';
			}
			if (fml[campo+'[apartamento]'].value.length == 0) {
				j += ++i + ') Apartamento\n';
			}
			if (fml[campo+'[comentario]'].value.length == 0) {
				j += ++i + ') Descrição do problema\n';
			}
	}
	if(campo == 'fale')
	{
			if (fml[campo+'[comentario]'].value.length == 0) {
				j += ++i + ') Comentários, dúvidas e sugestões\n';
			}
	}
	if(campo == 'curriculum')
	{
		if (fml[campo+'[arquivo_id]'].value.length == 0 || fml[campo+'[arquivo_id]'].value == 0) {
				j += ++i + ') Curriculum\n';
			}
		if (fml[campo+'[area_interesse]'].value.length == 0) {
				j += ++i + ') Área de interesse\n';
			}
		
	}
	
	if (i > 0) {
		alert(j);
		return false;
	} else {
		enviaFormPadrao(fml,campo);
		return false;
	}
}
function URLEncode (clearString) {
  var output = '';
  var x = 0;
  var regex = /(^[a-zA-Z0-9_.]*)/;
  while (x < clearString.length) {
    var match = regex.exec(clearString.substr(x));
    if (match != null && match.length > 1 && match[1] != '') {
    	output += match[1];
      x += match[1].length;
    } else {
      if (clearString[x] == ' ')
        output += '+';
      else {
        var charCode = clearString.charCodeAt(x);
        var hexVal = charCode.toString(16);
        output += '%' + ( hexVal.length < 2 ? '0' : '' ) + hexVal.toUpperCase();
      }
      x++;
    }
  }
  return output;
}
function enviaFormPadrao(fml,campo)
{
	//PEGO TODOS OS CAMPOS E ENVIO
	
	campos = new Array();
	ultimofml = fml;
	
	if(fml[campo+'[empr_id]'])
	campos[campos.length]  = 'empr_id='+URLEncode(fml[campo+'[empr_id]'].value);
	
	if(fml[campo+'[empreendimento]'])
	campos[campos.length]  = 'empreendimento='+URLEncode(fml[campo+'[empreendimento]'].value);
	
	if(fml[campo+'[nome]'])
	campos[campos.length]  = 'nome='+URLEncode(fml[campo+'[nome]'].value);
	
	if(fml[campo+'[email]'])
	campos[campos.length]  = 'email='+URLEncode(fml[campo+'[email]'].value);
	
	if(fml[campo+'[dddtel]'])
	campos[campos.length]  = 'dddtel='+URLEncode(fml[campo+'[dddtel]'].value);
	
	if(fml[campo+'[tel]'])
	campos[campos.length]  = 'tel='+URLEncode(fml[campo+'[tel]'].value);
	
	if(fml[campo+'[dddcel]'])
	campos[campos.length]  = 'dddcel='+URLEncode(fml[campo+'[dddcel]'].value);
	
	if(fml[campo+'[cel]'])
	campos[campos.length]  = 'cel='+URLEncode(fml[campo+'[cel]'].value);
	
	if(fml[campo+'[departamento]'])
	campos[campos.length]  = 'departamento='+URLEncode(fml[campo+'[departamento]'].value);
	
	if(fml[campo+'[apartamento]'])
	campos[campos.length]  = 'apartamento='+URLEncode(fml[campo+'[apartamento]'].value);
	
	if(fml[campo+'[melhor_dia]'])
	campos[campos.length]  = 'melhor_dia='+URLEncode(fml[campo+'[melhor_dia]'].value);
	
	if(fml[campo+'[melhor_horario]'])
	campos[campos.length]  = 'melhor_horario='+URLEncode(fml[campo+'[melhor_horario]'].value);
	
	if(fml[campo+'[comentario]'])
	campos[campos.length]  = 'comentario='+URLEncode(fml[campo+'[comentario]'].value);
	
	if(fml[campo+'[receber_informacoes]'])
	{
			if(fml[campo+'[receber_informacoes]'].checked)
			campos[campos.length]  = "receber_informacoes=s";
	}
	//CAMPOS CURRICULUM;;;;;;;;;;;;;;;;;;;;;
	if(fml[campo+'[area_interesse]'])
	campos[campos.length]  = 'area_interesse='+URLEncode(fml[campo+'[area_interesse]'].value);
	
	if(fml[campo+'[arquivo_id]'])
	campos[campos.length]  = 'arquivo_id='+URLEncode(fml[campo+'[arquivo_id]'].value);
	
	//CAMPOS DO CADASTRO;;;;;;;;;;;;;;;;;;;;
	
	if(fml[campo+'[voce_e]'])
	campos[campos.length]  = 'voce_e='+URLEncode(fml[campo+'[voce_e]'].value);
	
	if(fml[campo+'[sexo]'])
	campos[campos.length]  = 'sexo='+URLEncode(fml[campo+'[sexo]'].value);
	
	if(fml[campo+'[estadoCivil]'])
	campos[campos.length]  = 'estadoCivil='+URLEncode(fml[campo+'[estadoCivil]'].value);
	
	if(fml[campo+'[nascimento]'])
	campos[campos.length]  = 'nascimento='+URLEncode(fml[campo+'[nascimento]'].value);
	
	if(fml[campo+'[rua]'])
	campos[campos.length]  = 'rua='+URLEncode(fml[campo+'[rua]'].value);
	
	if(fml[campo+'[complemento]'])
	campos[campos.length]  = 'complemento='+URLEncode(fml[campo+'[complemento]'].value);
	
	if(fml[campo+'[bairro]'])
	campos[campos.length]  = 'bairro='+URLEncode(fml[campo+'[bairro]'].value);
	
	if(fml[campo+'[cidade]'])
	campos[campos.length]  = 'cidade='+URLEncode(fml[campo+'[cidade]'].value);
	
	if(fml[campo+'[estado]'])
	campos[campos.length]  = 'estado='+URLEncode(fml[campo+'[estado]'].value);
	
	if(fml[campo+'[cep]'])
	campos[campos.length]  = 'cep='+URLEncode(fml[campo+'[cep]'].value);
	
	if(fml[campo+'[PrefImovel]'])
	campos[campos.length]  = 'PrefImovel='+URLEncode(fml[campo+'[PrefImovel]'].value);
	
	if(fml[campo+'[PrefQuartos]'])
	campos[campos.length]  = 'PrefQuartos='+URLEncode(fml[campo+'[PrefQuartos]'].value);
	
	if(fml[campo+'[PrefVagas]'])
	campos[campos.length]  = 'PrefVagas='+URLEncode(fml[campo+'[PrefVagas]'].value);
	
	if(fml[campo+'[PrefCidades]'])
	campos[campos.length]  = 'PrefCidades='+URLEncode(fml[campo+'[PrefCidades]'].value);
	
	if(fml[campo+'[PrefCidade1]'])
	campos[campos.length]  = 'PrefCidade1='+URLEncode(fml[campo+'[PrefCidade1]'].value);
	
	if(fml[campo+'[PrefCidade2]'])
	campos[campos.length]  = 'PrefCidade2='+URLEncode(fml[campo+'[PrefCidade2]'].value);
	
	if(fml[campo+'[PrefCidade3]'])
	campos[campos.length]  = 'PrefCidade3='+URLEncode(fml[campo+'[PrefCidade3]'].value);
	
	if(fml[campo+'[PrefBairros]'])
	campos[campos.length]  = 'PrefBairros='+URLEncode(fml[campo+'[PrefBairros]'].value);
	
	if(fml[campo+'[PrefBairro1]'])
	campos[campos.length]  = 'PrefBairro1='+URLEncode(fml[campo+'[PrefBairro1]'].value);
	
	if(fml[campo+'[PrefBairro2]'])
	campos[campos.length]  = 'PrefBairro2='+URLEncode(fml[campo+'[PrefBairro2]'].value);
	
	if(fml[campo+'[PrefBairro3]'])
	campos[campos.length]  = 'PrefBairro3='+URLEncode(fml[campo+'[PrefBairro3]'].value);
	
	if(fml[campo+'[preco]'])
	campos[campos.length]  = 'preco='+URLEncode(fml[campo+'[preco]'].value);

	
	//CAMPOS DO INDIQUE;;;;;;;;;;;;;;;;;;;;;
	if(fml[campo+'[de_nome]'])
	campos[campos.length]  = 'de_nome='+URLEncode(fml[campo+'[de_nome]'].value);
	if(fml[campo+'[de_email]'])
	campos[campos.length]  = 'de_email='+URLEncode(fml[campo+'[de_email]'].value);
	if(fml[campo+'[para_nome]'])
	campos[campos.length]  = 'para_nome='+URLEncode(fml[campo+'[para_nome]'].value);
	if(fml[campo+'[para_email]'])
	campos[campos.length]  = 'para_email='+URLEncode(fml[campo+'[para_email]'].value);
	
	campos[campos.length] = 'formulario='+campo;
	
	queryString = campos.join('&');

	getAjax('ajax/enviaFormPadrao.php?'+queryString,'respostaFormPadrao','');

}
function respostaFormPadrao(dados)
{
	dados = unescape(dados);
	dados = dados.split('|');
	
	alert(dados[1]);
	
	if(dados[0]=='ok')
	limpaFormPadrao();
}
function limpaFormPadrao()
{
		if(ultimofml)ultimofml.reset();
}
function maskdata(o)
{
	if(o.value.length==2)
	o.value+="/";
	
	if(o.value.length==5)
	o.value+="/";
}
function maskcep(o)
{
	if(o.value.length==2)
	o.value+=".";
	
	if(o.value.length==6)
	o.value+="-";
}

//CORRETOR ON LINE LATERAL
			function CorretorOnLineLateral() {
				$(document).ready(function() {
					var y_fixo = $("#abaLateral").offset().top;
					$(window).scroll(function() {
						$("#abaLateral").animate({
							top: y_fixo + $(document).scrollTop() + "px"
						}, { duration: 450, queue: false }
					);
					});
				});
			}			
			function fix(btn) {
				var botao = btn;
				if (botao == 'btnFixar') {
					document.getElementById("abaLateral").className = "abaNoScroll";
					document.getElementById("btnFixar").style.display = 'none';
					document.getElementById("btnDestravar").style.display = 'block';
				}
				if (botao == 'btnDestravar') {
					document.getElementById("abaLateral").className = "abaScroll";
					document.getElementById("btnFixar").style.display = 'block';
					document.getElementById("btnDestravar").style.display = 'none';
				}
			}
			CorretorOnLineLateral();
	
//FIM CORRETOR ON LINE LATERAL