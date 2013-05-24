<?php

header('Content-Type: text/html; charset=ISO-8859-1');

include ('PagSeguroRetornoConfig.php'); 
include ('PagSeguroRetornoFuncoes.php');

define('TOKEN', $retorno_token);


if (count($_POST) > 0) {	
	$npi = new PagSeguroNpi();
	$result = $npi->notificationPost();
	
	$transacaoID = isset($_POST['TransacaoID']) ? $_POST['TransacaoID'] : '';
	
	if ($result == "VERIFICADO") {
		

		// Recebendo Dados
                
		$VendedorEmail  = $_POST['VendedorEmail'];
		$TransacaoID = $_POST['TransacaoID'];
                $TID = ereg_replace('-','', $TransacaoID); 
		$Referencia = $_POST['Referencia'];
		$Extras = MoedaBR($_POST['Extras']);
		$TipoFrete = $_POST['TipoFrete'];
		$ValorFrete = MoedaBR($_POST['ValorFrete']);
		$DataTransacao = ConverterData($_POST['DataTransacao']);
		$Anotacao = $_POST['Anotacao'];
		$TipoPagamento = $_POST['TipoPagamento'];
		$StatusTransacao = $_POST['StatusTransacao'];
		$CliNome = $_POST['CliNome'];
		$CliEmail = $_POST['CliEmail'];
		$CliEndereco = $_POST['CliEndereco'];
		$CliNumero = $_POST['CliNumero'];
		$CliComplemento = $_POST['CliComplemento'];
		$CliBairro = $_POST['CliBairro'];
		$CliCidade = $_POST['CliCidade'];
		$CliEstado = $_POST['CliEstado'];
		$CliCEP = $_POST['CliCEP'];
		$CliTelefone = $_POST['CliTelefone'];
		$NumItens = 1; //neste sistema sempre ser� 1.
                
                
		switch($StatusTransacao) {
		
	            /*
		     * Status da transa��o efetuada. Pode receber as seguintes vari�veis:
   		     * Completo: Pagamento completo
		     * Aguardando Pagto: Aguardando pagamento do cliente
		     * Aprovado: Pagamento aprovado, aguardando compensa��o
		     * Em An�lise: Pagamento aprovado, em an�lise pelo PagSeguro
		     * Cancelado: Pagamento cancelado pelo PagSeguro 
		   */
		
		   case "Aguardando Pagto":
		   // Aqui n�o existe, inserindo novo registro no sistema
			
					mysql_query("INSERT into pagsegurotransacoes SET
					TID='$TID',
                                        VendedorEmail='$VendedorEmail',	
					TransacaoID='$TransacaoID',	
					Referencia='$Referencia',	
					Extras='$Extras',	
					TipoFrete='$TipoFrete',	
					ValorFrete='$ValorFrete',	
					DataTransacao='$DataTransacao',	
					Anotacao='$Anotacao',	
					TipoPagamento='$TipoPagamento',	
					StatusTransacao='$StatusTransacao',	
					CliNome='$CliNome',	
					CliEmail='$CliEmail',	
					CliEndereco='$CliEndereco',	
					CliNumero='$CliNumero',	
					CliComplemento='$CliComplemento',	
					CliBairro='$CliBairro',	
					CliCidade='$CliCidade',	
					CliEstado='$CliEstado',	
					CliCEP='$CliCEP',	
					CliTelefone='$CliTelefone',	
					NumItens='$NumItens',	
					Data=now();");

					// Recebendo e gravando produtos
					//Aqui ele far� novamente a confer�ncia
					$Processo = mysql_query("SELECT VendedorEmail FROM pagseguroprodutos WHERE VendedorEmail='".$_POST['VendedorEmail']."' AND TransacaoID='".$_POST['TransacaoID']."'");
					if (mysql_num_rows($Processo) == 0) {
						for($i=1;$i<=$NumItens;$i++) {
							
							$ProdID = $_POST["ProdID_{$i}"];
							$ProdDescricao = $_POST["ProdDescricao_{$i}"];
							$ProdValor = MoedaBR($_POST["ProdValor_{$i}"]);
							$ProdQuantidade = $_POST["ProdQuantidade_{$i}"];
							$ProdFrete = MoedaBR($_POST["ProdFrete_{$i}"]);
                                                     
							mysql_query("INSERT into pagseguroprodutos SET 
                                                        TID='$TID',	
                                                        VendedorEmail='$VendedorEmail',	
							TransacaoID='$TransacaoID',	
							Ordem='$i',	
							ProdID='$ProdID',	
							ProdDescricao='$ProdDescricao',	
							ProdValor='$ProdValor',	
							ProdQuantidade='$ProdQuantidade',	
							ProdFrete='$ProdFrete'");			
									}
								}
		   
		   break;
		   
		   case "EmAnalise":
                   case "Em Análise":
                   case "Em Analise":
                       
                   mysql_query("UPDATE  pagsegurotransacoes SET
					VendedorEmail='$VendedorEmail',	
					Referencia='$Referencia',	
					Extras='$Extras',	
					TipoFrete='$TipoFrete',	
					ValorFrete='$ValorFrete',	
					DataTransacao='$DataTransacao',	
					Anotacao='$Anotacao',	
					TipoPagamento='$TipoPagamento',	
					StatusTransacao='$StatusTransacao',	
					CliNome='$CliNome',	
					CliEmail='$CliEmail',	
					CliEndereco='$CliEndereco',	
					CliNumero='$CliNumero',	
					CliComplemento='$CliComplemento',	
					CliBairro='$CliBairro',	
					CliCidade='$CliCidade',	
					CliEstado='$CliEstado',	
					CliCEP='$CliCEP',	
					CliTelefone='$CliTelefone',	
					NumItens='$NumItens',	
					Data=now() WHERE TID = '$TID'");
                       
                                      
                       
                 
                       
		   break;
		   
		   case "Aprovada":
                   case "Aprovado":                       
		         
                            mysql_query("UPDATE  pagsegurotransacoes SET
					VendedorEmail='$VendedorEmail',	
					Referencia='$Referencia',	
					Extras='$Extras',	
					TipoFrete='$TipoFrete',	
					ValorFrete='$ValorFrete',	
					DataTransacao='$DataTransacao',	
					Anotacao='$Anotacao',	
					TipoPagamento='$TipoPagamento',	
					StatusTransacao='$StatusTransacao',	
					CliNome='$CliNome',	
					CliEmail='$CliEmail',	
					CliEndereco='$CliEndereco',	
					CliNumero='$CliNumero',	
					CliComplemento='$CliComplemento',	
					CliBairro='$CliBairro',	
					CliCidade='$CliCidade',	
					CliEstado='$CliEstado',	
					CliCEP='$CliCEP',	
					CliTelefone='$CliTelefone',	
					NumItens='$NumItens',	
					Data=now() WHERE TID = '$TID'");
                                
                       
                        //dados do cliente que comprou:
                       $cliente = mysql_query("SELECT * FROM usuarios WHERE email = '$CliEmail'");
                       $cliente_dados = mysql_fetch_object($cliente);
                       
                       $idcliente = $cliente_dados->id;
                     
                       //produtos comprados
                       $adquirido   = mysql_query("SELECT * FROM pagseguroprodutos WHERE TID = '$TID' ");
                       $adquirido_dados = mysql_fetch_object($adquirido);
                       
                       $planoAdq = $adquirido_dados->ProdID;
                       $prodAdq  = $Referencia;
                       
                       $dadosPlano = mysql_query("SELECT * FROM destaques_planos WHERE id = '$planoAdq'");
                       $dadosPlanoEscolhido = mysql_fetch_object($dadosPlano);
                       
                   
                                              
                       //procura se o produto já é destaque
                       $destaque = mysql_query("SELECT * FROM produtos_destaques WHERE idcliente = '$idcliente' AND idproduto='$prodAdq'");
                       
                       
                       
                       if (mysql_num_rows($destaque) == 0) {
                           //significa que o produto não é destaque, ou seja, será pela primeira vez =D
                           $inicio  = date('Y-m-d'); //a data só passa a contar a partir de sua data de liberação
                           $tempo   = $dadosPlanoEscolhido->duracao; //quantos dias iremos adicionar
                           $termino = date('Y-m-d', strtotime("+".$tempo." days")); //data + o tempo do plano
                           $ativo   = 's'; //libera o sistema para ler o destaque
                           
                            mysql_query("INSERT INTO produtos_destaques SET
                                                   idcliente     = '$idcliente',
                                                   idproduto     = '$prodAdq',
                                                   idplano       = '$planoAdq',
                                                   start         = '$inicio',
                                                   end           = '$termino',
                                                   ativo         = '$ativo',
                                                   dclicks       = '0'");
                           
                           //avisar o cliente por e-mail
                           //fim =D

                       } else {
                          // Aqui significa que será uma recarga
                         
                         
                         $mudanca = mysql_fetch_object($destaque);
                       
                          //preparando as mudanças
                          $bdfim = strtotime($mudanca->end);
                          $hj    = strtotime('now');
                          
                       
                          if ($hj <= $bdfim) { 
                          
                              //significa que o cliente ainda tem dias de saldo, então a data final vira inicial :D
                              $tempo   = $dadosPlanoEscolhido->duracao; //quantos dias iremos adicionar
                              $novoinicio = $mudanca->end;
                              $novofinal  = date('Y-m-d', strtotime("+".$tempo." days",strtotime($novoinicio)));
                             
                            
                          } else {
                              //significa que o periodo acabou, então o update será feito de forma diferente
                             $novoinicio = date('Y-m-d');
                             $novofinal  = date('Y-m-d', strtotime("+".$tempo." days",strtotime($novoinicio)));
                             
                          }
                          
                           $idest      = $mudanca->id;
                           $hoy        = date('Y-m-d');
                           
//                               $c1 = $novoinicio . '/' . $novofinal . '/' . $idest;
//                               $c2 = 'Sera q dá?';
//                               mysql_query("INSERT INTO erros SET termo1 = '$c1', termo2 = '$c2'");
                          
                            mysql_query("UPDATE produtos_destaques SET
                                                    start  = '$novoinicio',
                                                    end    = '$novofinal',
                                                    ativo  = 's',
                                                    ultimarecarga = '$hoy'
                                                    WHERE id = '$idest'");
                          
                          //avisa por email 
                            // fim :D
                        
                      }
                       
                       
		   break;
		   
		   case "Cancelada":
                   case "Cancelado":    

                    mysql_query("UPDATE  pagsegurotransacoes SET
					VendedorEmail='$VendedorEmail',	
					Referencia='$Referencia',	
					Extras='$Extras',	
					TipoFrete='$TipoFrete',	
					ValorFrete='$ValorFrete',	
					DataTransacao='$DataTransacao',	
					Anotacao='$Anotacao',	
					TipoPagamento='$TipoPagamento',	
					StatusTransacao='$StatusTransacao',	
					CliNome='$CliNome',	
					CliEmail='$CliEmail',	
					CliEndereco='$CliEndereco',	
					CliNumero='$CliNumero',	
					CliComplemento='$CliComplemento',	
					CliBairro='$CliBairro',	
					CliCidade='$CliCidade',	
					CliEstado='$CliEstado',	
					CliCEP='$CliCEP',	
					CliTelefone='$CliTelefone',	
					NumItens='$NumItens',	
					Data=now() WHERE TID = '$TID'");
                                
                       
                                    
		   break;		   
		   
		   case "Completa":
                   case "Completo":  
                       
	  		    mysql_query("UPDATE  pagsegurotransacoes SET
					VendedorEmail='$VendedorEmail',	
					Referencia='$Referencia',	
					Extras='$Extras',	
					TipoFrete='$TipoFrete',	
					ValorFrete='$ValorFrete',	
					DataTransacao='$DataTransacao',	
					Anotacao='$Anotacao',	
					TipoPagamento='$TipoPagamento',	
					StatusTransacao='$StatusTransacao',	
					CliNome='$CliNome',	
					CliEmail='$CliEmail',	
					CliEndereco='$CliEndereco',	
					CliNumero='$CliNumero',	
					CliComplemento='$CliComplemento',	
					CliBairro='$CliBairro',	
					CliCidade='$CliCidade',	
					CliEstado='$CliEstado',	
					CliCEP='$CliCEP',	
					CliTelefone='$CliTelefone',	
					NumItens='$NumItens',	
					Data=now() WHERE TID = '$TID'");
                                
                       
                                 
		   break;
		
		}		
            } 
} else {
	Header("Location: $retorno_site"); exit();
}
?>
