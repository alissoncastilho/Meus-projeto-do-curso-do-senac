<?php

    include("funcoes.php");

    $id_usuario= $_GET["id_usuario"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if(is_numeric($id_usuario)){
        $sql = "UPDATE usuarios SET usuario='$usuario',senha='$senha'
        WHERE id_usuario=$id_usuario";
    }else{
        $sql = "INSERT INTO usuarios (usuario,senha)
        VALUES
        ('$usuario','$senha')";
    }
   
    $conexao->query($sql); 
    $conexao->close();     

    //echo $sql; 
    header("location:adm_usuario.php"); 

?>