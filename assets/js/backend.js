// JavaScript Document
$(document).ready(function() {
	oTable = $('#example').dataTable({
		"bPaginate": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers"
	});
	
	
	//combos dependentes
	$('#estado').change(function(){
		valor = $(this).val();
		if (valor != "") {
			$('#cidade').load(base_url + 'restrito/imoveis/getcidades/' + valor);
		}
	});
	
	$("#cidade").change(function(){
		valor = $(this).val();
		if (valor != "") {
			$('#bairro').load(base_url + 'restrito/imoveis/getbairros/' + valor);
		}
	});
	
	//fim combos dependentes
	
	
});