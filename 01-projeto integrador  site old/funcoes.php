<?php

    $servidor = "localhost";  // nome ou ip do servidor.
    $usuario = "root";        
    $senha = "";
    $banco = "bp";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);  // abrir comando
    
    mysqli_query($conexao,"SET NAMES 'utf8'");  
    mysqli_query($conexao,'SET character_set_connection=utf8');  
    mysqli_query($conexao,'SET character_set_client=utf8');  
    mysqli_query($conexao,'SET character_set_results=utf8'); 

    
     // Função Estados do Brasil

    function estadosBR(){

        $estados = array('','AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO');
        //sort($estados);   //Ordenar em ordem alfabética
            foreach($estados as $estado){
                $listaUf .= "<option >$estado</option>";
            }
        return $listaUf;
    }

?>