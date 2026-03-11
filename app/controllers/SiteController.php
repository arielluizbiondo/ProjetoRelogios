<?php

namespace controllers;

use carrinhoService;

require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/autoload.php';


class SiteController
{
    public function index()
    {
        require BASE_VIEW_URL .'/index.php';
        exit;
    }
    public function feminino()
    {   
        require BASE_VIEW_URL . '/relogio/feminino/feminino.php';
        exit;
    }
    public function masculino()
    {
        require BASE_VIEW_URL . '/relogio/masculino/masculino.php';
        exit;
    }
}