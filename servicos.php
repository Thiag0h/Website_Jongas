<?php
$host = "localhost";
$db = "CadastroProdutos";         
$user = "root";     
$pass = "";      

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM servicos ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens\JongasLogo16x16.ico">
    <link rel="stylesheet" href="CSS\styleservicos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>
      <a href="index.html"><nav id="navbar">
        <img id="nav_logo" src="Imagens/JongasLogo.png" alt="Logo Jongas" height="80px"></a>
            <div id="logo-text">JONGAS</div>
            <button class="hamburger"></button>
            <ul id="nav_list">
                <li class="nav-item">
                    <a href="LandingPage.html">
                        Início <i class="fa-solid fa-chevron-right arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="servicos.php">
                        Serviços <i class="fa-solid fa-chevron-right arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="novidades.html">
                        Novidades <i class="fa-solid fa-chevron-right arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Sobre.html">
                            Sobre <i class="fa-solid fa-chevron-right arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contatos.html">
                        Contato <i class="fa-solid fa-chevron-right arrow"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="hero fade-in-up">
    <h4>Bem-vindo à area de serviços</h4>
    <div class="hero-text">
        <h2>Tecnologia aplicada por pessoas, para pessoas</h2>
        <p>
        Superar cada desafio apresentado nos permite assegurar sempre a máxima qualidade em cada serviço disponibilizado, 
        contando com profissionais altamente capacitados para atender às demandas específicas de cada cliente. 
        Somos incansáveis na busca por compreender profundamente as necessidades dos nossos parceiros, pois sabemos que esse é um fator determinante para a excelência na prestação de serviços de TI.
        </p>
        <p>
        Trabalhamos com projetos, conectividade, criação de sistemas, mobilidade, soluções em nuvem (Cloud Computing) e personalização de produtos, sempre com um foco estratégico baseado em conhecimento, aprendizado e experiência. Nossa qualificação nos serviços que disponibilizamos nos posiciona como a escolha ideal para impulsionar o crescimento do seu negócio.
        </p>
    </div>
    </section>
    <menu>
    <?php
    if ($result->num_rows > 0) {
        while ($produto = $result->fetch_assoc()) {
            echo '<div class="card-produto">';
            echo '  <div class="imagem-produto">';
            echo '    <img src="php/uploads/' . htmlspecialchars($produto['imagem']) . '" alt="Imagem do Produto">';
            echo '  </div>';
            echo '  <div class="conteudo-produto">';
            echo '    <h2 class="titulo-produto">' . htmlspecialchars($produto['nome']) . '</h2>';
            echo '    <p class="descricao-produto">' . nl2br(htmlspecialchars($produto['descricao'])) . '</p>';
            echo '  </div>';
            echo '</div>';
        }
    } else {
        echo "<p>Nenhum produto cadastrado.</p>";
    }

    $conn->close();
    ?>
    </menu>
    <h2 id="text">Conheça melhor como fazemos!</h2>
    <a class="btn" href="contatos.html" >SOLICITE UM CONTATO</a>
    <div id="img-jongas">
        <img src="Imagens/JongasEspiando.png" alt="JongasEspiando" height="100px">
    </div>
      <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>JONGAS</h1>
                <p>Olá eu sou o Jongas!</p>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <img src="Imagens/instagram_pixel_logo_icon_181922.png" alt="instagram"> </a>
                    <a href="#" class="footer-link" id="linkedin">
                        <img src="Imagens/linkedin_pixel_logo_icon_181925.png" alt="linkedin"> </a>
                    <a href="#" class="footer-link" id="whatzapp">
                        <img src="Imagens/whatsapp_pixel_logo_icon_181923.png" alt="whatzapp"> </a>
                </div>
            </div>
            <div class="footer-links">
            <h3>Índice</h3>
              <a href="LandingPage.html" class="footer-link">Início</a>
              <a href="servicos.php" class="footer-link">Serviços</a>
              <a href="novidades.html" class="footer-link">Novidades</a>
              <a href="Sobre.html" class="footer-link">Sobre</a>
              <a href="contatos.html" class="footer-link">Contato</a>
            </div>
            <div id="footer_subscribe">
                <h3>Inscrever-se</h3>
                <p>
                    Insira seu e-mail para receber notificações sobre nossas novidades
                </p>
                <form action="PHP/newsletter.php" method="post"> 
                <div id="input_group">
                  <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="digite seu e-mail" required>
                    <button type="submit">
                        <i class="fa-regular fa-envelope"></i>
                    </button>
                </div>
              </form>
            </div>
        </div>
        <div id="footer_copyright">
            &#169
            2025 all rights reserve
        </div>
    </footer>
<script src="Javascript\servicos.js"></script>
</body>
</html>
