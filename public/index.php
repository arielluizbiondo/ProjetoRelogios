<?php
    require_once __DIR__ . '/../app/core/config/constants.php';
    require_once __DIR__ . '/../app/core/autoload.php';

    use controllers\AdminController;
    use controllers\SiteController;
    use router\Router;
    
    $router = new Router($_SERVER['REQUEST_URI']);

    $router->get('/feminino', 'controllers\SiteController@feminino');
    $router->get('/masculino', 'controllers\SiteController@masculino');
    $router->get('/login', 'controllers\AdminController@login');
    $router->get('/cadastrar', 'controllers\AdminController@cadastrar');
    $router->get('/admin-logado', 'controllers\AdminController@adminLogado');    
    $router->get('/cadastrar-produtos', 'controllers\AdminController@pagProdutosServices');
    $router->get('/form-cadastrar-produtos', 'controllers\AdminController@pagProdutosServices');
    
    
    $router->post('/formatar-produto', 'controllers\AdminController@pagUpdate');
    $router->post('/comprar-produto', 'controllers\AdminController@pagComprarProduto');
    
    $router->post('/alterando-produto', 'controllers\AdminController@atualizarProduto');
    $router->post('/cadastrando-produtos', 'controllers\AdminController@cadastrandoProdutosForm');
    $router->post('/login-admin', 'controllers\AdminController@loginAdmin');
    $router->post('/cadastro-admin', 'controllers\AdminController@cadastroService');
    $router->post('/deletar', 'controllers\AdminController@deletar');
    
    $router->dispatch();
?>

<!DOCTYPE html>
<html lang="pt-br">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="assets/imgs/stopwatch.svg" type="image/x-icon">
<!-- Bootstrap -->
<link rel="stylesheet" href="assets/css/Boostrap.min.css">
<!-- CSS -->
<link rel="stylesheet" href="assets/css/sass/Principal.css">
<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<title>Relojoaria</title>
</head>

<body>
    
    <!-- Inicio do cabeçalho da página - Banner principal -->
    <?php
        require_once DIR_APP . "/view/layout/header.php";
    ?>
    <!-- Fim do cabeçalho da página - Banner principal -->

    <!-- Inicio menu -->
    <?php
        require_once DIR_APP . "/view/layout/menu.php";
    ?>
    <!-- Fim menu -->

    <!-- Inicio Modal -->
    <?php
        require_once DIR_APP . "/view/layout/modal.php";
    ?>
    <!-- Fim Modal -->

    <!-- Inicio história -->
    <?php
        require_once DIR_APP . "/view/layout/historia.php";
    ?>
    <!-- Fim história -->

    <!-- Inicio dados -->
    <?php
        require_once DIR_APP . "/view/layout/dados.php";
    ?>
    <!-- Fim dados -->

    <!-- Inicio Frase-->
    <?php
        require_once DIR_APP . "/view/layout/frase.php";
    ?>
    <!-- Fim Frase -->

    <!-- Inicio Portifolio feminino-->
    <?php
        require_once DIR_APP . "/view/layout/portifolioFem.php";
    ?>
    <!--Fim Portifolio feminino -->

    <!-- Inicio Portifolio masculino -->
    <?php
        require_once DIR_APP . "/view/layout/portifolioMas.php";
    ?>
    <!--Fim Portifolio masculino -->
    

    <!-- Inicio Rodapé -->
    <?php
        require_once DIR_APP . "/view/layout/footer.php";
    ?>
    <!-- FIm Rodapé -->

    <!-- Bootstrap JS (bundle) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>