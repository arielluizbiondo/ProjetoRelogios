<?php
require_once __DIR__ . '/../../../services/produtoService.php';

use services\produtoService;

$service = new produtoService;

$produtos = $service->listarRelogiosMasculinos();

?>

<section class="feminino w-75 m-auto">
    <div class="container-feminino">
        <h1 class="h1-feminino text-center mt-3">
            Coleção Masculina
        </h1>
        <div class="container-cards-feminino">
        <?php
                foreach($produtos as $prod)
                {
                    echo '<div class="card">';
                    echo     '<img src="assets/imgs/caixaRelogios.png" class="card-img-top" alt="...">';
                    echo     '<div class="card-body">';
                    
                    echo         '<h5 class="card-title">' . $prod->nome.'</h5>';
                    echo         '<p class="card-text">' . $prod->descricao.'</p>';
                    echo         '<p class="card-text"> R$ ' . number_format($prod->valor,2, ',','.').'</p>';
                    
                    echo         '<form action="'. URL_BASE .'/comprar-produto" method="POST">';
                    echo            '<input type="hidden" name="id" value="'.$prod->id.'">';
                    echo            '<button type="submit"  class="btn btn-success w-100">Comprar</button>';
                    echo         '</form>';

                    echo     '</div>';
                    echo '</div>';
                }
                ?>
        </div>
    </div>
</section>