<?php
     include('funcoes.php');
 $sql= " SELECT * FROM contato";
 $resultado = $conexao->query ($sql);
 $lista = "";

 while($linha = mysqli_fetch_array($resultado)){
     $nome =   $linha ["nome"];
     $email =  $linha ["email"];
     $sexo =   $linha ["sexo"];
     $cidade = $linha ["cidade"];
     $estado = $linha ["estado"];
     $comentario = $linha ["comentario"];
     $lista.="<tr><td>$nome</td>
                    <td>$email</td>
                    <td>$sexo</td>
                    <td>$cidade</td>
                    <td>$estado</td>
                    <td>$comentario</td>
                    </tr>";

    } 

    $conexao->close();
     
     include ('header.php');   

    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista dos clientes</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Import CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="servicos bg-light pt-4 pb-2 text-center">
    <div class="container">

        <div class="my-0  ">
            <p class="display-4">Lista de clientes</p>
        </div>
<div class="table-responsive-sm">
<table class="table table-sm table-hover container text-primary text-center ">
    <thead class="bg-danger text-white">
        <tr>
        <th scope="col">Nome</th> 
        <th scope="col">Email</th>
        <th scope="col">sexo</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado:UF</th>
        <th scope="col">Comentario</th>

        </tr>
    </thead>
    <tbody>
    <tr>
    
        <th><?php echo $lista; ?></th>
        
    </tr>

    
</tbody>
</table>
</div>
<a href="sair.php" class="btn btn-warning btn-lg mt-2 mb-4"> Sair</a>
</section>

    <?php
        include ('footer.php');
    ?>

    <!-- Import Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>