
<?php 
    include("funcoes.php");

    $sexo = "";
    $sexoM = "";
    $sexoF = "";
    
    if($sexo == "F"){
        $sexoF = "checked";
    }else{
        $sexoM = "checked";
    }
?>

<?php
     include ('header.php');   
     include ('banner.php');   
    
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

    <div class="my-0  ">
        <p class="display-4" id="">Nossos Serviços</p>
    </div>

    <div class="row ">
        <div class="col-md-4 d-none d-md-block">
            <div class="bg-servicos mb-5 mx-auto">
                <img class="w-100" src="images/bg-1.jpg" alt="imagen">
            </div>
        </div>

        <div class="col-md-8">
            <div class="row">

                <div class="col-sm-6 md-4">
                    <div class="media">
                        <span class="icon icon-primary"> 
                            <i class="fas fa-motorcycle fa-2x"> </i>
                        </span>
                        <div class="media-body">
                            <h5 class="mb-3">Fazemos Entregas</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                                saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 md-4">
                    <div class="media">
                        <span class="icon icon-primary"> 
                            <i class="fas fa-box fa-2x"></i>
                        </span>
                        <div class="media-body">
                            <h5 class="mb-3"> Fazemos Encomendas</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                                saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.
                            </p>
                        </div>
                    </div>
                </div>

             <div class="col-sm-6 md-4">
                    <div class="media">
                        <span class="icon icon-primary"> 
                                <i class=" fas fa-calendar-week fa-2x"> </i>
                        </span>
                        <div class="media-body">
                            <h5 class="mb-3">fazemos eventos</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                            Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                            saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.
                            </p>
                        </div>
                    </div>
                </div>

                
                <div class="col-sm-6 md-4">
                    <div class="media">
                        <span class="icon icon-primary"> 
                            <i class="fas fa-credit-card fa-2x"> </i>
                        </span>
                        <div class="media-body">
                            <h5 class="mb-3"> Aceitamos Cartoes</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                                saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a   target="blank" href="https://drive.google.com/file/d/1wl7y9EbCHgzmObuQJ1a4H9oQRDn-eIoI/view" class="btn btn-warning btn-lg mt-2 mb-4">
            Dowlond do Cardapio
    </a>
</div>

</section>


<!--  Seclection do sobre nos -->

<section class="servicos bg-light pt-4 pb-2 text-center">
<div class="container">

    <div class="my-0  ">
        <p class="display-4" id="ql">Sobre Nós </p>
    </div>

    <div class="row ">
        <div class="col-md-4 d-none d-md-block">
            <div class="bg-servicos mb-5 mx-auto">
                <img class="w-100" src="images/raul.jpg" alt="imagen">
            </div>
        </div>

        <div class="col-md-8">
            <div class="row">

                <div class="col-sm-6 md-4">
                    <div class="media">
                        <span class="icon icon-primary"> 
                            <i class="fas fa-landmark fa-2x"> </i>
                        </span>
                        <div class="media-body">
                            <h5 class="mb-3">Historia da empresa</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                                saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                                saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                                Quod nihil natus aut repellendus! Modi, quaerat minima sint dignissimos voluptate laboriosam
                                saepe quam repellendus doloribus in harum cumque atque voluptatum necessitatibus.
                            </p>

                        </div>
                    </div>
                </div>
    
                <div class="col-sm-6 md-4">
                    <div class="media">
                        <span class="icon icon-primary"> 
                            <i class="fab fa-youtube fa-2x"> </i>
                        </span>
                        <div class="media-body">
                            <h5 class="mb-3"> Nosso Canal</h5>
                            <p>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/JwBaWWPUf8U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </p>

                        </div>
                    </div>
                </div>

                <div>
        </div>

</section>

<!--  Formulario de contato -->

<section class="servicos bg-light pt-0 pb-0 text-center">
<div class="container">

    <div class="my-0  ">
        <p class="display-4" id="contato">Contato</p>
    </div>

<p>Preencha os campos no formulário abaixo:</p>
<div class = "teste ">
<form id="form1" name="formContato" method="POST" action="gravarFormulario.php"> 
<p>
<input type="text" name="nome" id="nome" class="campo" placeholder="Digite o Nome" required>
</p>
<p>
<input type="email" name="email" id="email" class="campo" placeholder="Digite o Email">
</p>
<p>
    sexo
    <input name="sexo" type="radio" <?php echo $sexoM; ?> value="M">Masculino
    <input name="sexo" type="radio" <?php echo $sexoF; ?> value="F">Feminino
        </p>
<p>
<input type="text" name="cidade" id="cidade" class="campo"  placeholder="Nome da Cidade">
</p>

<p>
    Estado/UF:
<select name="estado" type="text" id="estado" class="campo combo">
    <?php echo estadosBR($listaUf); ?> 
</select>
</p>

<p>
Comentário:
<textarea name="comentario" id="comentario"  rows="10" class="campo"></textarea>
</p>

<p>
&nbsp;
<input type="submit" name="enviar" id="enviar" class="botao" value="Enviar Contato" onclick="return validarContato();">
</p>
</div>
</form>      
</section> 


<!-- faq de perguntas Frequentes -->

<section class="container">
<div class="my-5 text-center">
    <span class="h3 text-black-50" id="pf">Perguntas Frequentes</span>
</div>

<div class="row justify-content-center accordion" id="my-accordion">
    <div class="faq">
<div class="col-sm-12 ">
<div class="tabs">
    <div class="tab">
        <input type="radio" id="rd1" name="rd">
        <label for="rd1" class="tab-label">Vocês cobrão teixa de entrega?</label>
        <div class="tab-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
    </div>
    
    <div class="tab">
        <input type="radio" id="rd2" name="rd">
        <label for="rd2" class="tab-label">vocés so vendem comida vegana?</label>
        <div class="tab-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
    </div>

    <div class="tab">
        <input type="radio" id="rd3" name="rd">
        <label for="rd3" class="tab-label">vocês Trabalhão com PagSeguro?</label>
        <div class="tab-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
    </div>

    <div class="tab">
        <input type="radio" id="rd4" name="rd">
        <label for="rd4" class="tab-label"> vocés aceita cartão?</label>
        <div class="tab-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
    </div>
    <div class="tab">
        <input type="radio" id="rd5" name="rd">
        <label for="rd5" class="close">Fechar &times;</label>
    </div>
</div> <!--Fim do faq-->
</div>  

</section>



<section>
<div class="container">
        <a href="#" class="voltar">
            <i class="fas fa-arrow-circle-up"></i>
        </a>
        
    </div>
    </section>
 <?php
        include ('footer.php');
    ?>

    <!-- Import Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/functions.js"></script>
</body>
</html>