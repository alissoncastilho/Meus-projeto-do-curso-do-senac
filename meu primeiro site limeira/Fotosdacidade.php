<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title> Fotos da Cidade </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="essa pagina contem algums  lugares turisticos da cidade "/>
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
            <h1><i class="fas fa-camera-retro"></i>&nbsp;Fotos da Cidade </h1>

</head>
<body>

<div class="gallery">
  <a target="_blank" href= "fotos/1.png">
    <img src="fotos/1.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">foto1 </div>
</div>

<div class="gallery">
  <a target="_blank" href="fotos/2.png">
    <img src= "fotos/2.png" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">foto2</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="fotos/1.png" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">foto3</div>
</div>

<div class="gallery">
  <a target="_blank" href= "fotos/1.png">
    <img src="fotos/1.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">foto1 </div>
</div>

<div class="gallery">
  <a target="_blank" href="fotos/2.png">
    <img src= "fotos/2.png" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">foto2</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="fotos/1.png" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">foto3</div>
</div>


  
</div>

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