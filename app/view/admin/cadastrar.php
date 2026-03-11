<?php
    require_once __DIR__ . '/../../core/config/constants.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!DOCTYPE html>
    <html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/stopwatch.svg" type="image/x-icon">


    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/Boostrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/pages/login/Principal.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Cadastrar</title>
    </head>
</head>
<body>
    <!-- Inicio cadastrar -->
        <?php
            require_once DIR_APP . "/view/admin/cadastrando.php";
        ?>
    <!-- Fim cadastrar -->
</body>
</html>