<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Empresa</title>
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

        <h1> <i class="fas fa-chart-bar"> </i> Empresa</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed malesuada tortor</strong> quam, et vulputate sem feugiat et. Quisque a ex eget leo sodales consectetur vel ac velit. Phasellus neque erat, cursus sed sem at, pharetra rhoncus eros. Morbi velit orci, interdum quis odio a, auctor sollicitudin libero. Proin diam nulla, euismod vel pharetra quis, venenatis ac augue. Suspendisse malesuada eleifend dolor. Morbi ornare ipsum a maximus egestas. Nunc scelerisque augue vitae hendrerit commodo. Nullam porta scelerisque elit. Curabitur non ipsum non nunc lacinia euismod. Donec efficitur ex non lorem mollis, id pharetra neque varius. Donec ante mi, feugiat ut pharetra a, pharetra ut diam. Sed suscipit neque sapien. Nulla feugiat turpis at turpis accumsan, nec interdum purus gravida. Fusce posuere neque eget elit porta, sed placerat arcu varius.</p>
        <img src="imagens/foto1.jpg" alt="Passaro na grama">
        <p> <a href="#"> Mauris </a> congue eget diam non lacinia. Proin posuere ultrices magna, nec efficitur dui tincidunt sed. Vivamus id ipsum porttitor, imperdiet nibh non, malesuada sem. Aenean in erat posuere, bibendum magna ut, lacinia neque. Donec nec purus dolor. Fusce in ullamcorper velit, at imperdiet justo. Ut non tellus placerat, aliquet est maximus, volutpat massa. Donec eleifend ornare ante. Fusce sed risus sit amet ante ullamcorper egestas id quis tellus.</p>
        <img class="fotoD" src="imagens/foto2.jpg" alt="Pedra do Baú em campos do jordão">
        <p>Nullam iaculis malesuada justo pellentesque iaculis.<span> Mauris tempus in eros non aliquam </span>. Aliquam venenatis hendrerit tortor, nec egestas lacus feugiat id. Nunc finibus, tortor et vulputate rutrum, sapien sem iaculis erat, ac tristique lectus quam non lorem. Praesent ac fermentum libero, at sollicitudin odio. Nullam varius dignissim arcu vestibulum malesuada. Nam pulvinar eget neque quis sagittis. Aliquam eget suscipit sem. Morbi quis massa ac magna gravida cursus eget a lectus. Etiam at augue quis velit congue congue fringilla ac ex. </p>
    
        <h2>Missão</h2>
       
        <ul>
            <li>Ser grande</li>
            <li>Ser forte</li>
            <li>Ser honesto</li>
            <li>Ser eficiente</li>
        </ul>

        <h2>Visão</h2>
        
        <ul>
            <li>Otimização ao limite</li>
            <li>Reconhecimento das falhas</li>
            <li>Trabalho em equipe</li>  
        </ul>

        <h2>Valores</h2>
       
        <ul>
        <li>Confiança</li>
        <li>Objetividade</li>
        <li>Parceria</li>
        </ul>

    </article>

       <!-- Sidebar/Barra lateral aqui-->

       <?php
            include("Rodape.php");
            include("sidebar.php");
        ?>

    </section>

</body>
</html>