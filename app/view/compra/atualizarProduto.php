<?php
require_once __DIR__ . '/../../services/comprarProduto.php';

$comprarProduto = new comprarProduto();

$p = $comprarProduto->selectComprarProduto();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/Boostrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/pages/cadastroProdutos/stily.css">
    <title>Atualizar produtos</title>
</head>
<body>
    <form action="<?=URL_BASE?>/alterando-produto" method="post">
    <input type="hidden" name="id" value="<?= intval($_POST['id']) ?>">
        <fieldset class="container-dados-produto w-50 m-auto mt-5">
         <a href="<?= URL_BASE ?>/admin-logado">
              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-short text-dark" viewBox="0 0 16 16">
                  <path d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
              </svg>
          </a>
          <legend class="text-center" >Atualizar Produtos</legend>
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" id="nome" class="form-control" value="<?= $p->nome ?>" name="nome">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" id="descricao" class="form-control" value="<?= $p->descricao ?>" name="descricao">
          </div>
          <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" id="valor" class="form-control" value="<?= $p->valor ?>" name="valor">
          </div>
          <div class="mb-3">
            <label for="disabledSelect" class="form-label">Gênero</label>
            <select id="disabledSelect" name="genero" class="form-select">
              <option class="" value="m">Masculino</option>
              <option class="" value="f">Feminino</option>
            </select>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
              <label class="form-check-label" for="disabledFieldsetCheck">
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-dark btn-success w-100">Cadastrar</button>
        </fieldset>
      </form>
</body>
</html>