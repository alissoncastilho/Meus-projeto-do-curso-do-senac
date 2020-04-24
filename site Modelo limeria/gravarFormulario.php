<?php
    
    include("funcoes.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $comentario = $_POST["comentario"];
    // $informativo = $_POST["informativo"];

    $sql = "INSERT INTO contato(nome,email,sexo,cidade,estado,comentario)  /* informativo */
    VALUES
    ('$nome','$email','$sexo','$cidade','$estado','$comentario')"; /* '$informativo' */

    $conexao->query($sql);
    $conexao->close();

    //echo $sql;

    header("location:Contato.php");

?>