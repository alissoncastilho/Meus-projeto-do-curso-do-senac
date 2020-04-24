<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Portifólio</title>
    <meta name="description" content="Descrição da página..."/>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="lightbox2/dist/css/lightbox.css" rel="stylesheet">
    <script src="lightbox2/dist/js/lightbox.js"></script>
</head>
<body>
        <!-- Topo aqui do site -->

        <?php
            include("topo.php");
        ?>    
    
    <section>

        <article>
            <h1>Portifólio</h1>
            <p>Veja nossa galeria de fotos:</p>
            
            <div class="galeria">
            <a href="photos/foto1.jpg" data-lightbox="roadtrip" data-title="Árvore Araucária"><img src="photos/foto1p.jpg" alt=""></a>
            
            <a href="photos/foto2.jpg" data-lightbox="roadtrip" data-title="Campo do Jordão"><img src="photos/foto2p.jpg" alt=""></a>
           
            <a href="photos/foto3.jpg" data-lightbox="roadtrip" data-title="Morro"><img src="photos/foto3p.jpg" alt=""></a>
          
            <a href="photos/foto4.jpg" data-lightbox="roadtrip" data-title="Vista do Hotel"><img src="photos/foto4p.jpg" alt=""></a>
         
            <a href="photos/foto5.jpg" data-lightbox="roadtrip" data-title="Folhas de Árvore"><img src="photos/foto5p.jpg" alt=""></a>
          
            <a href="photos/foto6.jpg" data-lightbox="roadtrip" data-title="Palco de Show"><img src="photos/foto6p.jpg" alt=""></a>
          
            <a href="photos/foto7.jpg" data-lightbox="roadtrip" data-title="Morro"><img src="photos/foto7p.jpg" alt=""></a>
         
            <a href="photos/foto8.jpg" data-lightbox="roadtrip" data-title="Vista do Hotel"><img src="photos/foto8p.jpg" alt=""></a>
            
            <a href="photos/foto9.jpg" data-lightbox="roadtrip" data-title="Árvore Araucária"><img src="photos/foto9p.jpg" alt=""></a>
         
            <a href="photos/foto10.jpg" data-lightbox="roadtrip" data-title="Pôr do Sol"><img src="photos/foto10p.jpg" alt=""></a>
            
            <a href="photos/foto11.jpg" data-lightbox="roadtrip" data-title="Trilho de Trem"><img src="photos/foto11p.jpg" alt=""></a>
         
            <a href="photos/foto12.jpg" data-lightbox="roadtrip" data-title="Moeda comemorativa Campo do Jordão"><img src="photos/foto12p.jpg" alt=""></a>
            </div>

        </article>

       <!-- Sidebar/Barra lateral aqui-->

       <?php
            include("Rodape.php");
            include("sidebar.php");
        ?>

    </section>

</body>
</html>