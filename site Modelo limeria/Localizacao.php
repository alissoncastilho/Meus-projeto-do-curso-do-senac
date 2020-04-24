<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Localização</title>
    <meta name="description" content="Descrição da página..."/>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
        <!-- Topo aqui do site -->

        <?php
            include("topo.php");
        ?>    
    
    <section>

        <article>
            <h1>Localização</h1>
            <p>Veja nossa localização no mapa abaixo:</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.3159169535465!2d-47.40093798556905!3d-22.56728473151682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c880ee0caac24d%3A0x95fcf7d5914d4d50!2sSenac+Limeira!5e0!3m2!1spt-BR!2sbr!4v1558099661871!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <p>Veja nossa localização no street view:</p>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1558107510595!6m8!1m7!1sCAoSLEFGMVFpcFBYYkRrOURqb3JUQm5VN19IdDEyUjBZRV9Zcy1iSXhHRWNiZjY5!2m2!1d-22.56718155932865!2d-47.3984160064249!3f342.51924472563644!4f16.55078353698987!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </article>
         
       <!-- Sidebar/Barra lateral aqui-->

       <?php
            include("Rodape.php");
            include("sidebar.php");
        ?>

    </section>

</body>
</html>