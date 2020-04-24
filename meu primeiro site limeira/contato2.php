<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Página de contato da nossa cidade</title>
        <meta name="description" content="essa pagina é para entrar em contato com a prefeitura da cidade"/>
        <link type="text/css" rel="stylesheet" href="estilo.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1><i class="fas fa-address-book"></i>&nbsp;Contato</h1>
          <form id="form1" method="post" action="enviaContato.php">
                    <p class= "">
                    <label>Nome:</label>
                    <input type="text" name="nome"id="nome"class="campo"required>
                     </p>
                    
                     <p>
                    <label>E-mail:</label>
                    <input type="email" name="email" id="email"class="campo">
                    </p>
                    
                    <p>
                    <label>Sexo:</label>
                    <input type="radio" name="sexo"id="masc"0value="masc"> masculino
                    <input type="radio" name="sexo"id="fem"value="fem"> femenino
                    </p>
                    
                    <p>
                    <label>Cidade:</label>
                    <input type="text" name="cidade" id="cidade" class="campo">
                    </p>
                    <p>
                    <label>Estado:</label>
                    <select name="estado" id="estado"class="campo combo">
                    <option>  </option>
                    <option selected> AC </option>
                    <option> AL </option>
                    <option> AM </option>
                    <option> AP </option>
                    <option> BA </option>
                    <option> CE </option>
                    <option> DF </option>
                    <option> ES </option>
                    <option> GO </option>
                    <option> MA </option>
                    <option> MG </option>
                    <option> MS </option>
                    <option> MT </option>
                    <option> PA </option>
                    <option> PB </option>
                    <option> PE </option>
                    <option> PI </option>
                    <option> PR </option>
                    <option>RJ</option>
                    <option> RN </option>
                    <option> RO </option>
                    <option> RS </option>
                    <option> RR </option>
                    <option> SC </option>
                    <option> SE </option>
                    <option> SP </option>
                    <option> TO </option>
                    
                    </select>
                    <p> 
                    <Label>Comentario:</Label>
                    <textarea name="comentario" id="comentario"  rows="10" class="campo"></textarea>
                    </p>
                    <p>
                    <label>&nbsp;</label
                    <input type="checkbox" name="news" id="news"  value="sim">
                    Deseja receber nosso informativo?
                    </p>
                    <p>
                        <label>&nbsp;</label>
                    <input type="submit" none="enviar" id= "enviar" class="botao" value=" Evinar contato">
                    </p>
                    
                    </form>
                    


            </article>
            <?php
                include("sidebar.php");
                include("rodape.php");
                
                 ?>
        </section>
    </body>
    <script src="js/jquery.js"></script>
         <script src="js/functions.js"></script>  
</html>