<?php
     session_start();
     if(!isset($_SESSION["nomeUsuario"])){
         header("location:login.php");
         exit;
     }
 
    include("funcoes.php"); 

    $id_noticia = "";
    $titulo = "";
    $texto = "";

    if(isset($_GET["id_noticia"])){                                         // se existe?
        if(is_numeric($_GET["id_noticia"])){                                // é numérico?
            $id_noticia = $_GET["id_noticia"];                                      // recupera o valor do parâmetro
            $sql = "SELECT * FROM noticias WHERE id_noticia = $id_noticia";
            $resultado = $conexao->query($sql);
            while($linha = mysqli_fetch_array($resultado)){
                $id_noticia = $linha ["id_noticia"];
                $titulo = $linha ["titulo"];
                $texto = $linha ["texto"];
            }
        }
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

            <h1>Cadastro de Alteração de Notícias</h1>

        <div class="box1">
            <form name="form_noticia" method="post" enctype="multipart/form-data" action="gravar_noticia.php?id_noticia=<?php echo $id_noticia; ?>">  <!-- enctype="multipart/form-data" => atributo de envio de arquivos(fotos, etc...) -->
                <p>Título:<br/>
                    <input name="titulo" type="text" class="campo2" value="<?php echo $titulo; ?>">
                </p>
    
                <p>Texto:<br/>
                    <textarea name="texto" class="campo2"  rows="10"><?php echo $texto; ?></textarea>
                </p>
   
                <p>Foto:<br/>
                    <input type="file" name="foto" >
                </p>
                <br/>
                <p>
                    <input name="gravar" type="submit" value="Gravar Notícias" onclick="return validar_noticia();">
                </p>
            </form>
        </div>
        <p class="centro">
            <a href="adm_noticia.php">Voltar</a>
        </p>

        </article>

    </section>

    <?php
        include("Rodape.php");
    ?>

    <script src="js/validar.js"></script>
    
</body>
</html>