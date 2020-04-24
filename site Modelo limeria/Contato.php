<?php 
    include("funcoes.php");

    $sexo = "";
    $sexoM = "";
    $sexoF = "";
    
    if($sexo == "F"){
        $sexoF = "checked";
    }else{
        $sexoM = "checked";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Contato</title>
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
    <h1>Contato</h1>
    <p>Preencha os campos no formulário abaixo:</p>

    <form id="form1" name="formContato" method="POST" action="gravarFormulario.php"> 
        <p>
        <label>Nome:</label>
        <input type="text" name="nome" id="nome" class="campo" placeholder="Digite o Nome" required>
        </p>

        <p>
        <label>E-mail:</label>
        <input type="email" name="email" id="email" class="campo">
        </p>

        <p>
        <label>Sexo:</label>
            <input name="sexo" type="radio" <?php echo $sexoM; ?> value="M">Masculino
            <input name="sexo" type="radio" <?php echo $sexoF; ?> value="F">Feminino
        </p>

        <p>
        <label>Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="campo">
        </p>

        <p>
        <label>Estado/UF:</label>
        <select name="estado" type="text" id="estado" class="campo combo">
            <?php echo estadosBR($listaUf); ?> 
        </select>
        </p>

        <p>
        <Label>Comentário:</Label>
        <textarea name="comentario" id="comentario"  rows="10" class="campo"></textarea>
        </p>

        <!-- <p>
        <label>&nbsp;</label>
        <input name="informativo" type="checkbox" none="news" id= "news"  value="sim">
        Deseja receber nosso informativo?
        </p> -->

        <!-- <p>
        <label>Intervalo:</label>
        <input type="range" name="intervalo" min="1" max="10" class="campo">
        </p> -->

        <!-- <p>
        <label>Data:</label>
        <input type="date" name="date" class="campo">
        </p> -->

        <!-- <p>
        <label>Website:</label>
        <input type="url" name="website" class="campo">
        </p> -->

        <!-- <p>
        <label>Cor:</label>
        <input type="color" name="cor" class="campo">
        </p> -->

        <!-- 99999 para numérico e xxxxx para alphanumérico -->
        <!-- <p>
        <label>Cep:</label>
        <input type="text" name="cep" pattern="\d{5}-\d{3}"  placeholder="99999-999" class="campo"> 
        </p> -->

        <!-- 99999 para numérico e xxxxx para alphanumérico -->
        <!-- <p>
        <label>Rg:</label>
        <input type="text" name="rg" pattern="[0-9]{2}.[0-9]{3}.[0-9]{3}.[0-9a-aZ-Z]{1}"  placeholder="99.999.999-9" class="campo"> 
        </p> -->
        
        <p>
        <label>&nbsp;</label>
        <input type="submit" name="enviar" id="enviar" class="botao" value="Enviar Contato" onclick="return validarContato();">
        </p>

    </form>      
</article>

   <!-- Sidebar/Barra lateral aqui-->

<?php
    include("Rodape.php");
    include("sidebar.php");
?>

</section>

    <script src="js/validar.js"></script>

</body>
</html>