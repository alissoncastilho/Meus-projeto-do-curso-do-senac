<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title> Endereço da prefeitura da cidadae no google map </title>
       
        <meta name="description" content="Endereço da prefeitura da cidadae no google map"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="estilo.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
         <!-- aki eu coloquei um favicon  -->
        <link rel= "shortcut icon" tipe="image/x icon" href="fotos/logo.png" height="20">
    </head>
    <body>
        <?php
            include("topo.php");
        ?>
        <section>
            <article>
    <h3><h1><i class="fas fa-street-view"></i> Localização da Cidade </h1></br>
 <!-- localização incorporada direito do google maps -->
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117888.40713964491!2d-47.48451105638475!3d-22.57862746088446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c88055b6df0dc3%3A0x1b0ef5f339809ecd!2sLimeira%2C+SP%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1557936696367!5m2!1spt-BR!2sus" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
<h1>Facudade Unip</h1>
<iframe src="https://www.google.com/maps/embed?pb=!4v1559070305144!6m8!1m7!1s_D556rncaMLgO5v0176RwA!2m2!1d-22.57612289224175!2d-47.39715199303922!3f325.03598!4f0!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </article>
            <?php
                include("sidebar.php");
                include("rodape.php");
            ?>
        </section>
        <script src="js/jquery.js"></script>
         <script src="js/functions.js"></script>  
    </body>
</html>