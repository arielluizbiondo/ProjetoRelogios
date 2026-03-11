<?php

require_once __DIR__ . '/../core/autoload.php';
require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/orm/Record.php';
require_once __DIR__ . '/../core/orm/Repository.php';
require_once __DIR__ . '/../core/orm/Criteria.php';

use core\database\Transaction;
use models\Usuario;
use orm\Repository;
use orm\Criteria;
use core\log\LoggerTXT;

try {
    if($_SERVER['REQUEST_METHOD'] === 'POST') 
    {

        Transaction::open('bd');
        $log = new LoggerTXT(__DIR__ . '/../tmp/loginAdminService.txt');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $criteria = new Criteria();
        $criteria->add("email", "=", $email);

        $repository = new Repository(Usuario::class);
        $users = $repository->load($criteria);

        if($users && count($users) > 0) 
        {
            $usuario = $users[0];

            if(password_verify($senha, $usuario->senha)) 
            {
                header('Location: http://localhost:8080/projetorelogios/public/admin-logado');
                exit;
            }
            else
            {
                header('Location: http://localhost:8080/projetorelogios/public/login');
                exit;
            }
        }

        Transaction::close();
    }
} catch (\Throwable $th) {
    Transaction::rollback();
    echo "Erro: " . $th->getMessage();
}