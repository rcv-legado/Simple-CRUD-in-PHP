<?php
	/* Configuração dos dados do bd */
	$host = "localhost";
	$user = "user";
	$pass = "pass";
	$db = "database";

	/* Realiza conexão */
	$conexao = mysql_connect($host,$user,$pass);
	mysql_select_db($db);

?>
