<?php 
include("funcoes.php");           //relaciondo  com Banco, para toda página que utilizar banco.

$codigo = "";
$Ccidade = "";
$Cpop2000 = "";
$Cpop2010 = "";
$Cmulheres = "";
$Chomens = "";
$CUrbana = "";
$Crural = "";
$lista="";
$grafico="";




if(isset($_GET["codigo"])){             

    $codigo = $_GET["codigo"];         
    $sql = "SELECT cidades.codigo, cidades.cidade, cidades.pop2000, cidades.pop2010, cidades.mulheres, cidades.homens, cidades.urbana, cidades.rural
    FROM cidades where cidades.codigo = '$codigo'";
    $resultado = $conexao->query($sql);
    while($linha = mysqli_fetch_array($resultado)){
        $codigo = $linha["codigo"];
        $Ccidade = $linha["cidade"];
        $Cpop2000 = $linha["pop2000"];
        $Cpop2010 = $linha["pop2010"];
        $Cmulheres = $linha["mulheres"];
        $Chomens = $linha["homens"];
        $CUrbana = $linha["urbana"];
        $Crural = $linha["rural"];

    


        $lista.="<tr>
        <th scope='row'>$Ccidade</th>
        <td>$Cpop2000</td>
        <td>$Cpop2010</td>
        <td>$Cmulheres</td> 
        <td>$Chomens</td> 
        <td>$CUrbana</td> 
        <td>$Crural</td> 
         </tr>";
        
        }

        $resultado1= $Cpop2000 / $Cpop2010 * 100;
        $resultado1= number_format($resultado1, 0);
        
        $resultado2= $Cmulheres / $Cpop2010 * 100;
        $resultado2= number_format($resultado2, 0);
        
        $resultado3= $Chomens / $Cpop2010 * 100;
        $resultado3= number_format($resultado3, 0);
        
        $resultado4= $CUrbana / $Cpop2010 * 100;
        $resultado4= number_format($resultado4, 0);
        
        $resultado5= $Crural / $Cpop2010 * 100;
        $resultado5= number_format($resultado5, 0);

        



          $grafico.="
            <div class='progress my-3 mt-5' style='height: 20px;'>
                <div class='progress-bar bg-success ' role='progressbar' style='width: $resultado1%' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>$resultado1%</div>
            </div>
            <div class='progress my-3' style='height: 20px;'>
                <div class='progress-bar bg-info' role='progressbar' style='width: $resultado2%' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'>$resultado2%</div>
            </div>
            <div class='progress my-3' style='height: 20px;'>
                <div class='progress-bar bg-warning' role='progressbar' style='width: $resultado3%' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100'>$resultado3%   </div>
            </div>
            <div class='progress my-3' style='height: 20px;'>
                <div class='progress-bar bg-danger' role='progressbar' style='width: $resultado4%' aria-valuenow='80' aria-valuemin='0' aria-valuemax='100'>$resultado4%</div>
            </div>
            <div class='progress my-3' style='height: 20px;'>
                <div class='progress-bar bg-secondary' role='progressbar' style='width: $resultado5%' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'>$resultado5%</div>
            </div>";

            
    
    

}

       
$conexao->close();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Import CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>
<header>
<?php
 
 include ('header.php');


?> 
</header>
<body>
<section>
    <div class="alert alert-primary container mt-3 text-center" role="alert">  <!--alerta -->
        Lista com os dados da respectiva cidade:
    </div>
    <div class="table-responsive-sm">
    <table class="table table-sm table-hover container text-primary text-center">
        <thead class="  bg-info text-body">
            <tr> 
            <th scope="col ">Cidades</th>
            <th scope="col">População do ano 2000</th>
            <th scope="col">População do ano 2010</th>
            <th scope="col">Homens</th>
            <th scope="col">Mulheres</th>
            <th scope="col">Zona urbana</th>
            <th scope="col">Zona rural</th>

            </tr>
        </thead>
        <tbody>
        <tr>
            <th><?php echo $lista?></th>
           
        </tr>
    </tbody>
    </table>
    </div>
    <div class="alert alert-primary container my-5 text-center " role="alert">  <!--alerta -->
    Gráfico representativo da variação em percentual da população de 2000 para 2010 da referente cidade!
    </div>
    <!-- Grafico -->
    <div class="container my-5 mb-5">
        <?php echo $grafico;?>
    </div>
    <ul class=" container list-group list-group-horizontal-sm mt-5">
  <li class="list-group-item text-center">Descrição do gráfico:</li>

  <li class="list-group-item list-group-item-success">Percentual da população do ano de 2000 a 2010.</li>
  <li class="list-group-item list-group-item-primary">Percentual de mulheres do ano de 2000 a 2010.</li>
  <li class="list-group-item list-group-item-warning">Percentual de homens do ano de 2000 a 2010.</li>
  <li class="list-group-item list-group-item-danger">Percentual da área urbana do ano de 2000 a 2010.</li>
  <li class="list-group-item list-group-item-dark">Percentual da área rural do ano de 2000 a 2010.</li>
 
</ul>
</section>
<br>
<?php
include("footer.php");
?> 
<!-- Import Javascript -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>