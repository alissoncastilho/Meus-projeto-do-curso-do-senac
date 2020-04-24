<?php
     include('funcoes.php');
     $uf= "";
     $pop2010 = ""; 
     $estado ="";
     $cidades ="";
     $pop2000 = "";    
     $codigo ="";
     $lista = "";
    
 
     if(isset($_GET["uf"])){
        $uf = $_GET["uf"];
        $sql="SELECT c.codigo, e.uf, e.estado,c.cidade,c.pop2000,c.pop2010 
        FROM cidades as c
        INNER JOIN estados as e
        on e.uf = c.uf where e.uf ='$uf'";
        
        $resultado = $conexao->query ($sql);

        while($linha = mysqli_fetch_array($resultado)){
            $uf= $linha ["uf"];
            $pop2010 = $linha ["pop2010"]; 
            $estado = $linha ["estado"];
            $cidades = $linha ["cidade"];
            $pop2000 = $linha ["pop2000"];
            $codigo = $linha ["codigo"];
     
    
            $lista.= "<tr>
                <th scope='row'>$uf</th>
                <td>$pop2000</td>
                <td>$pop2010</td>
              <td>$estado</td>
                <td><a href='cidades.php?codigo=$codigo'>$cidades</a></td>    
                </tr>
            ";
       }
     }   
       
        
    

    $conexao->close();
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

    <?php
        include ('header.php');
    ?>
    <section class="servicos bg-light pt-2 pb-2 text-center">
        <div class="container">
            <div class="my-4 text-center">
                <div class="col-md-12">
                <p> 
                <div class="alert alert-primary container my-5 text-center " role="alert">  <!--alerta -->
                UF POPULAÇÃO ANOS 2000 E ANOS 2010
    </div>
     </p>      
     <table class="table">
         <?php echo $lista; ?>  
     </table>    
</section>

    <?php
        include ('footer.php');
    ?>

    <!-- Import Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>