<?php
// Inclui o arquivo que faz a conexão ao MySQL
include("includes/dbconnect.php");

$id = $_GET['id'];

// Montamos a consulta SQL para deletar a(s) notícia(s) com ID maior ou igual a três
$query = "DELETE FROM `aluno` WHERE (`id` = $id)";

// Executa a query
$deletar = mysql_query($query);
	if ($deletar) {
		echo "O aluno n. $id foi deletado com sucesso!";
	} else {
		echo "Não foi possível deletar o aluno, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
		}


?>
