<?php

    $servidor = "localhost";  // nome ou ip do servidor.
    $usuario = "root";        
    $senha = "";
    $banco = "bancosite";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);  // abrir comando
    
    mysqli_query($conexao,"SET NAMES 'utf8'");  
    mysqli_query($conexao,'SET character_set_connection=utf8');  
    mysqli_query($conexao,'SET character_set_client=utf8');  
    mysqli_query($conexao,'SET character_set_results=utf8'); 

    // Função para tirar palavras que não serão usadas par pesquisa relacionada

    function limpa_texto($texto){

        $texto = str_replace(" a ","",$texto);
        $texto = str_replace(" e ","",$texto);
        $texto = str_replace(" o ","",$texto);
        $texto = str_replace(" em ","",$texto);
        $texto = str_replace(" para ","",$texto);
        $texto = str_replace(" de ","",$texto);
        $texto = str_replace(" da ","",$texto);
        $texto = str_replace(" do ","",$texto);
        $texto = str_replace(" com ","",$texto);
        $texto = str_replace(" um ","",$texto);
        $texto = str_replace(" uma ","",$texto);
        $texto = str_replace(" uns ","",$texto);
        $texto = str_replace(" umas ","",$texto);
        $texto = str_replace(" vai ","",$texto);
        $texto = str_replace(" teve ","",$texto);
        $texto = str_replace(" foi ","",$texto);
        $texto = str_replace(" no ","",$texto);
        $texto = str_replace(" na ","",$texto);

        return $texto;
    }

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