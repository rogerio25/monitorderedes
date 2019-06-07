<?php
//definindo variáveis de conexão

$servidor = "Faccon-0359";
$usuário  = "root";
$senha    = "faccon";
$banco    = "monitorderedes";

	// Criar conexão
	
	$connect = new mysqli ($servidor, $usuário, $senha, $banco);
	
	// checar conexão
	
	if($connect->connect_error) {
		die("conexão falhou : ".$connect->connect_error);
	}
?>