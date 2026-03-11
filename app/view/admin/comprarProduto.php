<?php

require_once __DIR__ . '/../../services/comprarProduto.php';


$comprarProduto = new comprarProduto();

$p = $comprarProduto->selectComprarProduto();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/pages/compraProdutos/compraProdutos.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/Boostrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/pages/cadastroProdutos/stily.css">
    <title>Comprar produto</title>
</head>
<body>
    <section class="login">
        <div class="esquedo">
            <img src="assets/imgs/caixaRelogios.png" class="img-login" alt="Imagem de login">
        </div>
    
        <div class="direito">
            <form action="<?= URL_BASE?>" method="post" class="form-login">
                <a href="<?= URL_BASE ?>/feminino">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-short text-dark" viewBox="0 0 16 16">
                        <path d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                    </svg>
                </a>
                <h1 class="h1-login">
                    Compra
                </h1>
                <hr>
                <div class="mb-3">
                    <label for="" class="form-label">Produto</label>
                    <input type="text" class="form-control" value="<?= $p->nome ?>" name="" disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Descrição</label>
                    <input type="text" class="form-control" value="<?= $p->descricao ?>" name="" disabled>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">valor</label>
                    <input type="text" class="form-control" value="<?= $p->valor ?>" name="" disabled>
                </div>
                
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Pagar
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">PIX</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <p>Nome: Ariel Luiz Biondo</p>
                          <img src="assets/imgs/QrCode.jpeg" width="350vh" class="img-qrcode" alt="">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </form>
        </div>
    </section>
    <!--JS - boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>