<?php
    require_once __DIR__ . '/../../services/produtosFormatService.php';

    use services\produtosFormatService;

    $service = new produtosFormatService;

    $produtos = $service->listarRelogiosMasculinos();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/Boostrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/pages/cadastroProdutos/stily.css">
    <title>Administrador</title>
</head>
<body>
    <!-- Inicio menu -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navBar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="<?= URL_BASE ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                        </svg>
                    </a>
                </li>
            </ul>
    
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL_BASE  ?>/form-cadastrar-produtos">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                          </svg>
                        Cadastrar
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Fim menu-->

    <!-- Inicio Portifólios produtos -->
    <section class="feminino w-75 m-auto">
        <div class="container-feminino">
            <h1 class="h1-feminino text-center">
                Gerenciamento de Produtos
            </h1>

            <div class="container-cards-feminino">
                <?php
                foreach($produtos as $prod)
                {
                    echo '<div class="card">';
                    echo     '<img src="assets/imgs/caixaRelogios.png" class="card-img-top" alt="...">';                    echo     '<div class="card-body">';
                    echo         '<h5 class="card-title">' . $prod->nome.'</h5>';
                    echo         '<p class="card-text">' . $prod->descricao.'</p>';
                    echo         '<p class="card-text"> R$ ' . number_format($prod->valor,2, ',','.').'</p>';

                    echo            '<form action="'. URL_BASE .'/formatar-produto" method="POST">';
                    echo                '<input type="hidden" name="id" value="'.$prod->id.'">';
                    echo                '<button type="submit" class="btn btn-warning w-100 mt-2">Formatar</button>';
                    echo            '</form>';                    
                    
                    echo            '<form action="'. URL_BASE .'/deletar" method="POST">';
                    echo                '<input type="hidden" name="id" value="'.$prod->id.'">';
                    echo                '<button type="submit" class="btn btn-danger w-100 mt-2">Excluir</button>';
                    echo            '</form>';
                    
                    echo     '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Inicio Portifólios produtos -->

    
    <!-- Bootstrap JS (bundle) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>