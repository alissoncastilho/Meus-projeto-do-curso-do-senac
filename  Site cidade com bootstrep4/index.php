<?php
     include('funcoes.php');
 $sql= " SELECT uf,estado,cidades FROM estados";
 $resultado = $conexao->query ($sql);
 $lista = "";

 while($linha = mysqli_fetch_array($resultado)){
     $uf = $linha ["uf"];
     $estado = $linha ["estado"];
     $cidades = $linha ["cidades"];
     $lista.= "<li class='list-group-item d-flex justify-content-between center '>
     <a href='estados.php?uf=$uf'>$estado</a>
     <span class='badge badge-primary badge-pill'>$cidades</span> </li>";

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
    <title>Estados e Cidade so Brasil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Import CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <section class="servicos bg-light pt-2 pb-2 text-center">
        <div class="container">
            <div class="my-4 text-center">
                <div class="col-md-12">
                <p> 
                <div class="alert alert-primary container my-5 text-center " role="alert">  <!--alerta -->
                Todos os Estados <br>
     Quantas Cidades de cada Estado do Brasil!
    </div>
                
     <ul class="list-group">
    
<?php echo $lista; ?>
  
    </ul>   
</section>

    <?php
        include ('footer.php');
    ?>

    <!-- Import Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>