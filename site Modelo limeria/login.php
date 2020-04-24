<?php

    session_start();
    $usuario = "";
    $senha = "";
    $erro = "";

    include("funcoes.php");

    if(isset($_POST["acessar"])){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        //$origem = "pagina1";

        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and senha='$senha'";
         //echo $sql;                         // como está sendo enviado para o banco
        $resultado = $conexao->query($sql);
        while($linha = mysqli_fetch_array($resultado)){
            $usuario = $linha["usuario"];
            $senha = $linha["senha"];
            $_SESSION["nomeUsuario"] = $usuario;
            /*if(isset($_GET["origem"])){
                $origem = $_GET[origem];
            }*/

            header("location:adm_noticia.php");
            exit;
        }

        $erro = "Dados inválidos. Tente novamente";
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

    <?php
        include("topo.php");
    ?>    
    
    <section>

        <article>
            <div class="box">
            <h1>Login<br/><br/></h1>
                <form name="formLogin" method="POST" action="">
                    <p>Usuário: <br>
                    <input name="usuario" type="text" class="campo1"></p>
                    
                    <p>Senha: <br>
                    <input name="senha" type="password" class="campo1"></p>

                    <p>
                        <input name="acessar" type="submit" value="Acessar" onclick="return validarLogin();">
                    </p>

                    <p> <?php echo $erro; ?> </p>
                </form>      
            </div>
        </article>

    </section>

    <?php
        include("Rodape.php");
    ?>

    <script src="js/validar.js"></script>
</body>
</html>