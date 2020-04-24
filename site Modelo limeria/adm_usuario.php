<?php

    session_start();
    if(!isset($_SESSION["nomeUsuario"])){
        header("location:login.php");
        exit;
    }

    include("funcoes.php"); 

    // Excluir
    if(isset($_GET["acao"])){
        if ($_GET["acao"] == "excluir" and is_numeric($_GET["id_usuario"])){
            $id_usuario = $_GET["id_usuario"];
            $sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";
            $conexao->query($sql);
        }
    }

    $sql = "SELECT * FROM usuarios ORDER BY id_usuario ASC";   // ordenar as notícias mais atuais
    $resultado = $conexao->query($sql);

    $tabela = "
        <table class='tabela2'>
            <tr>
                <th>Id Usuário</th>
                <th>Nome do Administrador</th>
                <th>Senha</th>
                <th>Editar / Excluir</th>
            </tr>    
    ";

    while($linha = mysqli_fetch_array($resultado)){ 
        $id_usuario = $linha["id_usuario"];   
        $usuario = $linha["usuario"];
        $senha = $linha["senha"];

        $editar = "<a href='add_usuario.php?id_usuario=$id_usuario'><i class='fas fa-edit'></i></a>";
        $excluir = "<a href='?acao=excluir&id_usuario=$id_usuario' onclick='return deletar(); return false;'><i class='fas fa-trash-alt'></i></a>";

        $tabela.="
            <tr>
                <td>$id_usuario</td>
                <td>$usuario</td>
                <td>$senha</td>
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
    <title>Adm Usuário</title>
    <meta name="description" content="Descrição da página..."/>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
</head>
<body>

    <?php
        include("Topo.php");
    ?>    
    
    <section>

        <article>

            <h1>Gerenciamento de Usuários</h1>
            
            <?php echo $tabela; ?>

            <p class="centro">
            <a href="add_usuario.php">Adicionar Usuários</a>
            </p>

        </article>

    </section>

    <?php
        include("Rodape.php");
    ?>

    <script src="js/validar.js"></script>
    
</body>
</html>