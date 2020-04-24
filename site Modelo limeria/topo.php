<div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
<header>
    <div class="logo">Site Institucional</div>
    <div class="Redessociais">
        <a target="blank" href="https://pt-br.facebook.com"><i class="fab fa-facebook-square"></i></a>
        <a target="blank" href="https://www.youtube.com"><i class="fab fa-youtube-square"></i></a>
        <a target="blank" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
        <a target="blank" href="https://twitter.com"><i class="fab fa-twitter-square"></i></a>
    </div>
</header>
<nav>
    <?php
      if(isset($_SESSION["nomeUsuario"])){
    ?>
    <!-- menu painel de controle -->
    <a href="adm_usuario.php">Usuários</a>
    <a href="add_usuario.php">Adm. Usuários</a>
    <a href="add_noticia.php">Adicionar Notícias</a>
    <a href="adm_noticia.php">Administrar Notícias</a>
    <a href="sair.php">Sair</a>
    <?php
    }else{
    ?>
    <!-- menu público -->
    <a href="index.php">Home</a>
    <a href="Empresa.php">Empresa</a>
    <a href="Clientes.php">Clientes</a>
    <a href="Servicos.php">Serviços</a>
    <a href="Portifolio.php">Portifólio</a>
    <a href="Audio-Video.php">Áudio e Vídeo</a>
    <a href="Localizacao.php">Localização</a>
    <a href="Contato.php">Contato</a>
    <a href="FAQ.php">FAQ</a>
    <?php
    }
    ?>
</nav> 
