<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice</title>
    <base href="http://localhost/Projeto_Modulo_2/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="icon" href="imagens/icon.webp">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Finlandica:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header class="header">
        <a href="home" title="Dice" class="header-logo">
            <img src="imagens/logo.png" alt="Dice">
        </a>

        <a onclick="showMenu()" title="Mostrar menu" class="header-menu">
            <img src="imagens/menu.webp" alt="Menu">
        </a>

        <nav class="header-nav">
            <ul>
                <li><a href="home" title="Loja">Loja</a></li>
                <li><a href="sobre-a-plataforma" title="Sobre a Plataforma">Sobre a Plataforma</a></li>
                <li><a href="suporte" title="Suporte">Suporte</a></li>
                <li><a href="login" title="Login" class="btn-botao">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "jogo") {
            $pagina = "jogo/index.php";
            $api = file_get_contents("http://localhost/Projeto_Modulo_2/api");
            $api_array = json_decode($api);
            $arrayFiltrado = array_filter($api_array, fn ($linha) => $linha->id == $jogo);
            if(sizeof($arrayFiltrado) == 0){
                include "paginas/erro.php";
            }
        } else {
            $pagina = "paginas/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>

    </main>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <footer class="footer">
        <p>Copyright &copy; 2024 - Dice Inc - Todos os direitos reservados.</p>
    </footer>

    <script>
        function showMenu() {
            console.log('entrou na função');
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

</body>

    

</html>