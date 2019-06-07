<?php
// faz o link com a página conexão
require_once 'db_connect.php';
if($_POST) {

	$nomecomputador = $_POST['nomecomputador'];
	$ip2long		= $_POST['ip'];
	
	$sql = "insert into computadores (nome, ip) values ('$nomecomputador', '$ip')";
		
	// verificar se deu tudo certo
	
	if($connect->query($sql) ===true) {
		echo "Dados inseridos com sucesso!";
} else {
	echo "error: ".$sql.$connect->connect_error;
}
	
	
	
	$connect->close();
}
?>