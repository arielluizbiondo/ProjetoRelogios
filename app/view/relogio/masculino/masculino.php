<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/stopwatch.svg" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/Boostrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/pages/masculino/Principal.css">

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>masculino</title>
</head>
<body>
    <!-- Cmç do Header -->
        <?php
            require_once DIR_APP . "/view/relogio/masculino/header.php";
        ?>
    <!-- Fim do Header -->

    <!-- Cmç do menu -->
        <?php
            require_once DIR_APP . "/view/relogio/masculino/menu.php";
        ?>
    <!-- Fim do menu -->

    <!-- Inicio Modal -->
        <?php
            require_once DIR_APP . "/view/layout/modal.php";
        ?>
    <!-- Fim Modal -->

    <!-- Cmç do potifolio -->
        <?php
            require_once DIR_APP . "/view/relogio/masculino/portifolio.php";
        ?>
    <!-- Fim do potifolio -->

    <!-- Cmç do Footer -->
        <?php
            require_once DIR_APP . "/view/relogio/masculino/footer.php";
        ?>
    <!-- Fim do footer-->
</body>

</html>