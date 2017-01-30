<?php
// Inclui o arquivo que faz a conexão ao MySQL
include("includes/dbconnect.php");

$usuarios = array();
$usuarios[] = array('nome' => 'Thiago', 'email' => 'contato@mail.com.net', 'datacadastro' => '2017-01-30');
$usuarios[] = array('nome' => 'Fulano da Silva', 'email' => 'fulano@email.com', 'datacadastro' => '2017-01-30');
$usuarios[] = array('nome' => 'Ciclano', 'email' => 'ciclano@uol.com.br', 'datacadastro' => '2017-01-30');
$usuarios[] = array('nome' => 'Fulano da Silva', 'email' => 'fulano@email.com', 'datacadastro' => '2017-01-30');
$usuarios[] = array('nome' => 'Ciclano', 'email' => 'ciclano@uol.com.br', 'datacadastro' => '2017-01-30');
// Inicia a variável
$cadastrados = 0;
// Para cada elemento de $usuários, faça:
foreach ($usuarios as $usuario) {
  $nome = $usuario['nome'];
  $email = $usuario['email'];
  $datacadastro = $usuario['datacadastro'];
  // Monta a consulta
  $sql = "INSERT INTO `aluno` (`nome`, `email`, `data_cadastro`) VALUES ('{$nome}', '{$email}', '{$datacadastro}');";
  // Executa a consulta verificando se foi inserido com sucesso
  if (mysql_query($sql)) {
    // Incrementa o contador
    $cadastrados++;
  }
}
      ?>
    
    
    <html>
  <head>
     <meta http-equiv="refresh" content="1; url=http://digitiba.com/sistemas/CRUD/visualizar.php">
    </head>
  <body>
    
    
    <?php
  
echo 'Usuários cadastrados: ' . $cadastrados;
  ?>

