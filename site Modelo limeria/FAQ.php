<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>FAQ</title>
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
        <h1>Perguntas Frequentes</h1>
        <div class="faq">
        <div class="tabs">
            <div class="tab">
                <input type="radio" id="rd1" name="rd">
                <label for="rd1" class="tab-label">Pergunta 1</label>
                <div class="tab-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
           
            <div class="tab">
                <input type="radio" id="rd2" name="rd">
                <label for="rd2" class="tab-label">Pergunta 2</label>
                <div class="tab-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>

            <div class="tab">
                <input type="radio" id="rd3" name="rd">
                <label for="rd3" class="tab-label">Pergunta 3</label>
                <div class="tab-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>

            <div class="tab">
                <input type="radio" id="rd4" name="rd">
                <label for="rd4" class="tab-label">Pergunta 4</label>
                <div class="tab-content">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
            <div class="tab">
                <input type="radio" id="rd5" name="rd">
                <label for="rd5" class="close">Fechar &times;</label>
            </div>
        </div> <!--Fim Tabs-->
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