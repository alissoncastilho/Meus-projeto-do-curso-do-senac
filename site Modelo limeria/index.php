<?php

    //phpinfo(); // para saber tudo que esta habilitado ou desabilitado no php

    include("funcoes.php"); 

    $sql = "SELECT * FROM noticias ORDER BY data DESC";   // ordenar as notícias mais atuais
    $resultado = $conexao->query($sql);

    $lista = "";
    while($linha = mysqli_fetch_array($resultado)){ 
        $id_noticia = $linha["id_noticia"];   
        $titulo = $linha["titulo"];

        $lista .= "<li><a href='ver_noticia.php?id_noticia=$id_noticia'>$titulo</a></li>";
    }

    $conexao->close();  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <meta name="description" content="Descrição da página..."/>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="bxslider/dist/jquery.bxslider.min.css">
</head>
<body>
    <?php
        include("topo.php");
    ?>   
        <main>
            <div class="container">
                <!-- <h2 class="title-slider">Banner</h2> -->
                <div class="banner-slider1">
                    <br>
                    <div class="itens">
                        <ul class="bxslider">
                            <li><img src="imagens/banner/banner1.jpg" alt="Tablet na Mesa"></li>
                            <li><img src="imagens/banner/banner2.jpg" alt="Código Css"></li>
                            <li><img src="imagens/banner/banner3.jpg" alt="Código javascript"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <script src="bxslider/dist/jquery-3.1.1.min.js"></script>
        <script src="bxslider/dist/jquery.bxslider.min.js"></script>

        <script>
            $(document).ready(function(){
                $('.itens .bxslider').bxSlider({
                    auto: true,
                    pause: 6000,
                    mode: 'horizontal',
                });
            });
        </script>

        <section>

            <article  class="index">
                <div class="home">

                    <div>
                        <a href="Empresa.php"><i class="fas fa-info-circle"></i></a>
                        <h3>Sobre a empresa</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue sem, vestibulum nec ex non, molestie facilisis turpis.</p>
                    </div>

                    <div>
                        <a href="Clientes.php"><i class="fas fa-users"></i></a>
                        <h3>Nossos clientes</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue sem, vestibulum nec ex non, molestie facilisis turpis.</p>
                    </div>

                    <div>
                        <a href="Servicos.php"><i class="fas fa-cogs"></i></a>
                        <h3>Nossos serviços</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue sem, vestibulum nec ex non, molestie facilisis turpis.</p>
                    </div>

                    <div>
                        <a href="Portifolio.php"><i class="fas fa-camera"></i></a>
                        <h3>Portifólio</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue sem, vestibulum nec ex non, molestie facilisis turpis.</p>
                    </div>

                    <div>
                        <a href="Localizacao.php"><i class="fas fa-map-marker"></i></a>
                        <h3>Localização</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue sem, vestibulum nec ex non, molestie facilisis turpis.</p>
                    </div>

                    <div>
                        <a href="Contato.php"><i class="fas fa-envelope"></i></a>
                        <h3>Fale Conosco</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam augue sem, vestibulum nec ex non, molestie facilisis turpis.</p>
                    </div>

                    <div class="boxnoticias">
                        <!-- <i class="boxnoticias"></i> -->

                        <h2>Ultimas Notícias</h2>

                        <ul class="noticias">
                            <?php echo $lista; ?>
                        </ul>
                    </div>

                </div>
            </article>
        </section>

    <?php

        include("Rodape.php");

    ?>

</body>
</html>