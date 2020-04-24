<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Serviços</title>
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
            <h1>Serviços</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum aliquam imperdiet vehicula. Proin vehicula sollicitudin justo at cursus.Vestibulum aliquam imperdiet vehicula. Proin vehicula sollicitudin justo at cursus.</p>
            
            <h2>Serviços de Internet</h2> 
            <p> <img class="fotoE" src="imagens/link.jpg" alt="Serviços de Internet"> Suspendisse vestibulum mauris et urna imperdiet, et egestas neque dapibus. Phasellus lobortis justo felis, nec sollicitudin nunc viverra vitae.Vestibulum aliquam imperdiet vehicula. Proin vehicula sollicitudin justo at cursus. </p>
            
            <h2>Serviços de Impressão</h2> 
            <p> <img class="fotoE" src="imagens/impressao.jpg" alt="Serviços de Impressão"> Suspendisse vestibulum mauris et urna imperdiet, et egestas neque dapibus. Phasellus lobortis justo felis, nec sollicitudin nunc viverra vitae.Vestibulum aliquam imperdiet vehicula. Proin vehicula sollicitudin justo at cursus. </p>      
           
            <h2>Serviços de Vídeo</h2> 
            <p> <img class="fotoE" src="imagens/filme.jpg" alt="Serviços de Vídeo"> Suspendisse vestibulum mauris et urna imperdiet, et egestas neque dapibus. Phasellus lobortis justo felis, nec sollicitudin nunc viverra vitae.Vestibulum aliquam imperdiet vehicula. Proin vehicula sollicitudin justo at cursus. </p>            
            
            <h2>Tabela de Preços</h2>
            <table class="tabela2">
                <tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Prazo</th>
                </tr>
                <tr>
                    <td>001</td>
                    <td>Serviço número 1</td>
                    <td>R$ 500,00</td>
                    <td>45 dias</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Serviço número 2</td>
                    <td>R$ 200,00</td>
                    <td>90 dias</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Serviço número 3</td>
                    <td>R$ 100,00</td>
                    <td>60 dias</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Serviço número 4</td>
                    <td>R$ 800,00</td>
                    <td>7 dias</td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>Serviço número 5</td>
                    <td>R$ 900,00</td>
                    <td>45 dias</td>
                </tr>
                <tr>
                    <td>006</td>
                    <td>Serviço número 6</td>
                    <td>R$ 150,00</td>
                    <td>30 dias</td>
                </tr>
                <tr>
                    <td>007</td>
                    <td>Serviço número 7</td>
                    <td>R$ 550,00</td>
                    <td>10 dias</td>
                </tr>
                <tr>
                    <td>008</td>
                    <td>Serviço número 8</td>
                    <td>R$ 750,00</td>
                    <td>25 dias</td>
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