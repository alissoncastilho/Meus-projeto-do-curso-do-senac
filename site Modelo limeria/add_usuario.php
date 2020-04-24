<?php
     session_start();
     if(!isset($_SESSION["nomeUsuario"])){
         header("location:login.php");
         exit;
     }
 
    include("funcoes.php"); 

    $id_usuario = "";
    $usuario = "";
    $senha = "";

    if(isset($_GET["id_usuario"])){                                         // se existe?
        if(is_numeric($_GET["id_usuario"])){                                // é numérico?
            $id_usuario = $_GET["id_usuario"];                                      // recupera o valor do parâmetro
            $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
            $resultado = $conexao->query($sql);
            while($linha = mysqli_fetch_array($resultado)){
                $id_usuario = $linha ["id_usuario"];
                $usuario = $linha ["usuario"];
                $senha = $linha ["senha"];
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Add Usuário</title>
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

            <h1>Cadastro e Alteração de Usuários</h1>
            <div class="box3">
                <form name="form_usuario" method="post" action="gravar_usuario.php?id_usuario=<?php echo $id_usuario; ?>">  
        
                    <p><label>Usuário:</label><br/>
                        <input name="usuario" class="campo3" value="<?php echo $usuario; ?>">
                    </p>
    
                    <p><label>Senha:</label><br/>
                    <input name="senha" type="text" class="campo3" value="<?php echo $senha; ?>">
                    </p>
                    <br/>
                    <p>
                        <input name="gravar" type="submit" value="Gravar Administrador" onclick="return validar_usuario();">
                    </p>
                </form>
            </div>

            <p class="centro">
            <a href="adm_usuario.php">Voltar</a>
            </p>

        </article>

    </section>

    <?php
        include("Rodape.php");
    ?>

    <script src="js/validar.js"></script>

</body>
</html>