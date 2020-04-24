<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Clientes</title>
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
            <h1>Clientes</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed malesuada tortor</strong> quam, et vulputate sem feugiat et. Quisque a ex eget leo sodales consectetur vel ac velit. Phasellus neque erat, cursus sed sem at, pharetra rhoncus eros. Morbi velit orci, interdum quis odio a, auctor sollicitudin libero. Proin diam nulla, euismod vel pharetra quis, venenatis ac augue. Suspendisse malesuada eleifend dolor. Morbi ornare ipsum a maximus egestas. Nunc scelerisque augue vitae hendrerit commodo. Nullam porta scelerisque elit. Curabitur non ipsum non nunc lacinia euismod. Donec efficitur ex non lorem mollis, id pharetra neque varius. Donec ante mi, feugiat ut pharetra a, pharetra ut diam. Sed suscipit neque sapien. Nulla feugiat turpis at turpis accumsan, nec interdum purus gravida. Fusce posuere neque eget elit porta, sed placerat arcu varius.</p>
            <h2>Lista de clientes atendidos</h2>
            <table class="tabela1">
            <tr>
                <td><a target="_blank" href="https://www.uol.com.br/"><img src="imagens/cliente1.jpg" alt="Cliente 1"></a></td>
                <td><img src="imagens/cliente2.jpg" alt="Cliente 2"></td>
                <td><img src="imagens/cliente3.jpg" alt="Cliente 3"></td>
            </tr>
            <tr>
                <td><img src="imagens/cliente4.jpg" alt="Cliente 4"></td>
                <td><img src="imagens/cliente5.jpg" alt="Cliente 5"></td>
                <td><img src="imagens/cliente6.jpg" alt="Cliente 6"></td>
            </tr>
            <tr>
                <td><img src="imagens/cliente4.jpg" alt="Cliente 7"></td>
                <td><img src="imagens/cliente5.jpg" alt="Cliente 8"></td>
                <td><img src="imagens/cliente6.jpg" alt="Cliente 9"></td>
            </tr>
            <tr>
                <td><img src="imagens/cliente7.jpg" alt="Cliente 10"></td>
                <td><img src="imagens/cliente8.jpg" alt="Cliente 11"></td>
                <td><img src="imagens/cliente9.jpg" alt="Cliente 12"></td>
            </tr>
            <tr>
                <td><img src="imagens/cliente10.jpg" alt="Cliente 13"></td>
                <td><img src="imagens/cliente11.jpg" alt="Cliente 14"></td>
                <td><img src="imagens/cliente12.jpg" alt="Cliente 15"></td>
            </tr>
            </table>
        </article>

       <!-- Sidebar/Barra lateral aqui-->

       <?php
            include("Rodape.php");
            include("sidebar.php");
        ?>

    </section>

</body>
</html>