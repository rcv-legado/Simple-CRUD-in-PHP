<?php
// Inclui o arquivo que faz a conexão ao MySQL
include("includes/dbconnect.php");

$query = "SELECT id, nome, email, data_cadastro FROM aluno";
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result)){
    echo 'id: ' . $row["id"]. ' - nome: ' . $row["nome"]. ' - ' . $row["email"].  ' - ' . $row["data_cadastro"]. ' [ <a href="deleteid.php?id='. $row["id"] .'">'. Deletar .'</a> / <a href="updateid.php?id='. $row["id"] .'">'. Alterar .'</a> ] <br/>';
    }
?>