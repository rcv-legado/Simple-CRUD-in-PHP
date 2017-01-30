<?php
// Inclui o arquivo que faz a conexão ao MySQL
include("includes/dbconnect.php");

// Id da notícia a ser editada
$id = $_GET['id'];

// Novo título da notícia
$nomeAtualizado = 'Nome do Aluno Atualizado';
$cadastro = date('Y-m-d H:i:s'); // Formato de data padrão do MySQL

// Manipulamos as variáveis para evitar problemas com aspas e outros caracteres protegidos do MySQL
$titulo = mysql_escape_string($titulo);

// Montamos a consulta SQL para deletar a(s) notícia(s) com ID maior ou igual a três
$query = "UPDATE `aluno` SET `nome` = '".$nomeAtualizado."', `data_cadastro` = '".$cadastro."' WHERE (`id` = ".$id.")";

// Executa a query
$atualiza = mysql_query($query);

	if ($atualiza) {
		echo "O aluno foi atualizada com sucesso!";
	} else {
		echo "Não foi possível atualizar o aluno, tente novamente.";
		// Exibe dados sobre o erro:
		echo "Dados sobre o erro:" . mysql_error();
	}
?>
