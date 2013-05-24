<?php
/*

 Retorno PagSeguro 2.0 - PHP e MySQL
 por Diogo Dourado - www.dourado.net
 Última Atualização: 09/06/2011
 
 Se você ainda não é cadastrado no PagSeguro, utilize o link abaixo para se cadastrar:
 https://pagseguro.uol.com.br/?ind=528005

*/

$retorno_site = 'http://www.sitedascompras.com.br/destaques/sucesso';  // Site para onde o usuário vai ser redirecionado ao termino do pagamento
$retorno_token = '18EC9E81A76A45919BBD8F1F253D49EA'; // Token gerado pelo PagSeguro

$retorno_host = '187.45.196.243'; // Local da base de dados MySql
$retorno_database = 'classificados2'; // Nome da base de dados MySql
$retorno_usuario = 'sitedascompras'; // Usuario com acesso a base de dados MySql
$retorno_senha = 'p2112Dez';  // Senha de acesso a base de dados MySql


?>