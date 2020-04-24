
<?php

     include ('header.php');   

    ?>
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

        header("location:listaFormulario.php");
        exit;
    }

    $erro = "Dados inválidos. Tente novamente";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OLD VEGAN FOOD</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Import CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="servicos bg-light pt-4 pb-2 text-center">
        <div class="container">

        <div class="row ">
                <div class="col-md-4 d-none d-md-block">
                    <div class="bg-servicos mb-5 mx-auto">
                        <img class="w-100" src="images/Login.jpg" alt="imagen">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">

                    </span>
                 <div class="media-body">
                 <h5 class="mb-3">Area do Adm</h5>
                 <p>
            <form name="form1" method="POST" action="">
                <p>Usuario: <br>
            <input name="usuario" type="text" class="campo"></p>
            
            <p>Senha: <br>
            <input name="senha" type="password" class="campo"></p>

            <p>
                <input name="acessar" type="submit" value="Acessar">
            </p>
        </form> 
        </p>

    </div>
</div>
  </section>

<?php
        include ('footer.php');
    ?>

    <!-- Import Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>