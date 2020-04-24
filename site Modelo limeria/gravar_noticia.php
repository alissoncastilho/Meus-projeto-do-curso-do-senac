<?php

    include("funcoes.php");

    $id_noticia = $_GET["id_noticia"];
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $data = date("Y-m-d");

    $texto = str_replace("'","\'",$texto); //substituir (') por (\) para não dar erro no banco de dados

    $foto = $_FILES["foto"]["name"];                // enviar foto, nome do arquivo
    $foto_temp = $_FILES["foto"]["tmp_name"];       //local onde esta gravado no servidor 

    if($foto!=""){
        list($largura, $altura, $tipo) = getimagesize($foto_temp);   // list => criar mais de uma variável de uma vez
        if($tipo == 1 or $tipo == 2 or $tipo == 3){                  // 1 = gif, 2 = jpg, 3 = png, arquivos suportados nos navegadores 
        
            copy($foto_temp, "galeria/$foto");                          //copia o arquivo para pasta uploads

            //phpinfo(); // GD tem que estar habilitado para funcionar manipulação de imagem 
    
            include "wideimage2/lib/WideImage.php";             // include do arquivo WideImage http://wideimage.sourceforge.net/
            $image = WideImage::load("galeria/$foto");
            $resized = $image->resize(600, 500);
            $resized->saveToFile("galeria/$foto");

        }
    }
    
    if(is_numeric($id_noticia)){
        $sql = "UPDATE noticias SET titulo='$titulo',texto='$texto',data='$data'
        WHERE id_noticia=$id_noticia";

            if($foto!=""){
                $sql2 = "UPDATE noticias SET foto = '$foto'
                WHERE id_noticia=$id_noticia";

                $conexao->query($sql2);
            }
    }else{
        $sql = "INSERT INTO noticias (titulo,texto,data,foto)
        VALUES
        ('$titulo','$texto','$data','$foto')";
    }
   
    $conexao->query($sql); //executar no banco de dados
    $conexao->close();     //encerrar conexao no banco de dados

    //echo $sql; //imprimir o que está indo para o banco de dados
    header("location:adm_noticia.php"); 

?>