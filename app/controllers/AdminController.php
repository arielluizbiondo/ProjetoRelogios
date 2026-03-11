<?php

namespace controllers;

require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/autoload.php';


class AdminController
{
    public function login()
    {
        require BASE_VIEW_URL . '/admin/login.php';
        exit;
    }
    public function cadastrar()
    {
        require BASE_VIEW_URL . '/admin/cadastrar.php';
        exit;
    }
    public function loginAdmin()
    {
        require DIR_APP . '/services/loginAdminService.php';
    }
    public function cadastroService()
    {
        require DIR_APP . '/services/cadastroService.php';
    }
    public function adminLogado()
    {
        require BASE_VIEW_URL . '/compra/index.php';
        exit;
    }
    public function pagProdutosServices()
    {
        require BASE_VIEW_URL . '/compra/cadastroProdutos.php';
        exit;
    }
    public function cadastrandoProdutosForm()
    {
        require DIR_APP . '/services/cadastroProdutosService.php';
    }
    public function deletar()
    {
        require DIR_APP . '/services/deletarProdutoService.php';
    }
    public function pagUpdate()
    {
        require_once BASE_VIEW_URL . '/compra/atualizarProduto.php';
        exit;
    }
    public function atualizarProduto()
    {
        require DIR_APP . '/services/updateProdutoService.php';
    }
    public function comprarProduto()
    {
        require DIR_APP . '/services/comprarProduto.php';
    }

    public function pagComprarProduto()
    {
        require_once BASE_VIEW_URL . '/admin/comprarProduto.php';
        exit;
    }
}