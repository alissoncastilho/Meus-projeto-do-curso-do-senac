<?php
// Associando ao Banco de dados

$servidor = "localhost";      // Nome ou IP do servido. Onde está?
$usuario = "root";
$senha = "";
$banco = "bancosite";
$conexao = new mysqli($servidor,$usuario,$senha,$banco);   // Criando conexão com o banco
mysqli_query($conexao,"SET NAMES 'utf8'");  
mysqli_query($conexao,'SET character_set_connection=utf8');  
mysqli_query($conexao,'SET character_set_client=utf8');  
mysqli_query($conexao,'SET character_set_results=utf8');

?>