<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMO Confeitaria - Erro</title>

    <link rel="shortcut icon" href="./site/img/icon.svg" type="image/x-icon">

    <link rel="stylesheet" href="./site/css/bootstrap.min.css">

    <link rel="stylesheet" href="./site/css/style.css">

</head>

<body>
    <main>
        <div class="container-fluid vh-100 bg-dark">
            <div class="container">
                <?php
                echo "<h1 class='display-1 text-center text-white'>Página não encontrada</h1>";
                echo "<p class='lead text-justified text-white'>Verificar se existe a rota criada</p>";
                echo "<p class='lead text-justified text-white'>Tentando acessar a rota: $url[0];</p>";
                ?>
                <a href="<?php echo URL;?> " class="btn btn-light">Voltar ao Inicio</a>
            </div>
        </div>
    </main>
</body>

</html>