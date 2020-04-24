<?php

    include("funcoes.php"); 

    $data = "";
    $titulo = "";
    $texto = "";
    $foto = "";

    if(isset($_GET["id_noticia"])){                                         // se existe?
        if(is_numeric($_GET["id_noticia"])){                                // é numérico?
            $id_noticia = $_GET["id_noticia"];                              // recupera o valor do parâmetro
            $sql = "SELECT * FROM noticias WHERE id_noticia = $id_noticia";
            $resultado = $conexao->query($sql);
            while($linha = mysqli_fetch_array($resultado)){
                $id_noticia = $linha ["id_noticia"];
                $data = $linha ["data"];
                $data  = date("d/m/Y",strtotime($data)); // máscara para tratar a data, no banco de dados o formato é (1965-01-23), colocar a data no formato  dia/mês/ano
                $titulo = $linha ["titulo"];
                $texto = $linha ["texto"];
                $foto = $linha ["foto"];

                if($foto != ""){
                    $foto = "<img class='fotonoticia' src='galeria/$foto'>";
                }

                $texto = str_replace("[foto]",$foto,$texto); // colocar foto no meio do texto, tem que ter o marcador no texto nesse exemplo [foto] é o marcador
            }
        }
    }else{
        header("location: index.php");
        exit;
    }

    // Notícias Relacionadas
    $complemento = "";
    $novo_titulo = limpa_texto($titulo);
    $palavras = explode(" ",$novo_titulo); //quebrar o texto em cima de um referencial, nesse exemplo nos espaços ( gera um array)

    foreach($palavras as $palavra){
        if($complemento != ""){
            $complemento.= " or ";
        }
        $complemento.="titulo like '%$palavra%' ";
    }

    $sql = "SELECT * FROM noticias WHERE $complemento ORDER BY rand()";   // notícias aleatórias com o comando rand();

    //echo $sql;

    $resultado = $conexao->query($sql);

    $lista = "";
    while($linha = mysqli_fetch_array($resultado)){ 
        $id_noticia_relacionada = $linha["id_noticia"];   
        $titulo_relacionado = $linha["titulo"];

        $lista .= "<li><a href='ver_noticia.php?id_noticia=$id_noticia_relacionada'>$titulo_relacionado</a></li>";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="description" content="Descrição da página..."/>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
        <!-- Topo aqui do site -->

        <?php
            include("topo.php");
        ?>    
    
    <section>

        <article>

            <h1><?php echo $titulo; ?></h1>
            <p><em><?php echo "Publicado em: " .$data; ?></em></p>
            <p><?php echo ($foto); ?></p> 
            <p><?php echo nl2br($texto); ?></p>            <!-- nl2br — Insere quebras de linha HTML antes de todas newlines em uma string -->

            <h2>Notícias relacionadas</h2>

            <ul>
                <?php echo $lista; ?> 
            </ul>

        </article>

       <!-- Sidebar/Barra lateral aqui-->

       <?php
            include("Rodape.php");
            include("sidebar.php");
        ?>

    </section>

</body>
</html>