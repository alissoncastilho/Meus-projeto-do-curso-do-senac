<?php

    session_start();
    if(!isset($_SESSION["nomeUsuario"])){
        header("location:login.php");
        exit;
    }

    include("funcoes.php"); 

    // Excluir
    if(isset($_GET["acao"])){
        if ($_GET["acao"] == "excluir" and is_numeric($_GET["id_noticia"])){
            $id_noticia = $_GET["id_noticia"];
            $sql = "DELETE FROM noticias WHERE id_noticia = $id_noticia";
            $conexao->query($sql);
        }
    }

    $sql = "SELECT * FROM noticias ORDER BY data DESC";   // ordenar as notícias mais atuais
    $resultado = $conexao->query($sql);

    $tabela = "
        <table class='tabela2'>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Data</th>
                <th>Editar / Excluir</th>
            </tr>    
    ";

    while($linha = mysqli_fetch_array($resultado)){ 
        $id_noticia = $linha["id_noticia"];   
        $titulo = $linha["titulo"];
        $data =  $linha["data"];
        $data  = date("d/m/Y",strtotime($data));  // máscara para tratar a data, no banco de dados o formato é (1965-01-23), colocar a data no formato  dia/mês/ano

        $editar = "<a href='add_noticia.php?id_noticia=$id_noticia'><i class='fas fa-edit'></i></a>";
        $excluir = "<a href='?acao=excluir&id_noticia=$id_noticia' onclick='return deletar(); return false;'><i class='fas fa-trash-alt'></i></a>";

        $tabela.="
            <tr>
                <td>$id_noticia</td>
                <td>$titulo</td>
                <td>$data</td>
                <td>$editar / $excluir</td>
            </tr>      
        ";
    }
    $tabela.="</table>";
    $conexao->close();                      // sempre fechar o comando

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

    <?php
        include("topo.php");
    ?>    
    
    <section>

        <article>

            <h1>Gerenciamento de Notícias</h1>
            
            <?php echo $tabela; ?>

            <p class="centro">
            <a href="add_noticia.php">Adicionar Notícia</a>
            </p>

        </article>
   
    </section>

    <?php
        include("Rodape.php");
    ?>

    <script src="js/validar.js"></script>
    
</body>
</html>