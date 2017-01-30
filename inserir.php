<?php
// Inclui o arquivo que faz a conexão ao MySQL
include("includes/dbconnect.php");


// Definição das variáveis para montar a query
$nome = 'Nome Aluno Cadastrado';
$email = 'teste@teste.com';
$datacadastro = date('Y-m-d H:i:s'); // Formato de data padrão do MySQL

// ~~~~~~~~~~~~~~~~~~~~~~~~~~

// Manipulamos as variáveis para evitar problemas com aspas e outros caracteres protegidos do MySQL
$titulo = mysql_escape_string($titulo);
$texto = mysql_escape_string($texto);

// Montamos a consulta SQL
$query = "INSERT INTO `aluno` (`nome`, `email`, `data_cadastro`) VALUES ('".$nome."', '".$email."', '".$datacadastro."')";

// Executa a query
$inserir = mysql_query($query);

    ?>
    
    
    <html>
  <head>
     <meta http-equiv="refresh" content="1; url=http://digitiba.com/sistemas/CRUD/visualizar.php">
    </head>
  <body>
    
    
    <?php  
  
if ($inserir) {
  echo "Aluno inserido com sucesso!";
  } else {
    echo "Não foi possível inserir o aluno, tente novamente.";
    // Exibe dados sobre o erro:
    echo "Dados sobre o erro:" . mysql_error();
  }


?>
