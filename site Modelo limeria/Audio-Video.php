<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Áudio e Vídeo</title>
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
        <h1>Áudio-Vídeo</h1>
        <p>Áudio e video em página HTML.</p>

        <p><strong> Exemplo de Áudio</strong></p>
            <audio controls> <!--autoplay--> <!--loop-->
                <source src="audio/audio.ogg" type="audio/ogg">
                <source src="audio/audio.mp3" type="audio/mp3">
            </audio>

            <p><strong>Exemplo de Vídeo</strong></p>
            <video controls> <!--autoplay--> <!--loop-->
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.ogg" type="video/ogg">
            Seu navegador não suporta vídeo HTML5
            </video>

            <p><strong> Exemplo de Vídeo incorporado do You Tube</strong></p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/pnVM0PI-Zgk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </article>

       <!-- Sidebar/Barra lateral aqui-->

       <?php
            include("Rodape.php");
            include("sidebar.php");
        ?>

    </section>

</body>
</html>