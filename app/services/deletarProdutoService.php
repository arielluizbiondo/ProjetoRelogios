<?php

namespace services;

require_once __DIR__ . '/../core/autoload.php';
require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/orm/Record.php';
require_once __DIR__ . '/../core/orm/Repository.php';
require_once __DIR__ . '/../core/orm/Criteria.php';

use core\database\Transaction;
use models\Relogio;
use orm\Repository;
use orm\Criteria;

try 
{

    Transaction::open('bd');

    $id = $_POST['id'];

    $criteria = new Criteria();
    $criteria->add("id", "=", $id);

    $repository = new Repository(Relogio::class);

    $repository->delete($criteria);

    Transaction::close();

    header('Location: http://localhost:8080/projetorelogios/public/admin-logado');
    exit;

} 
catch (\Throwable $th) 
{
    Transaction::rollback();
    echo 'Erro ao deletar relógio';
}