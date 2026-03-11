<?php
require_once __DIR__ .'/../core/autoload.php';
require_once __DIR__ .'/../core/config/constants.php';

use core\database\Transaction;
use core\database\Connection;
use core\log\Logger;
use core\log\LoggerTXT;
use models\Usuario;


try 
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {

        Transaction::open('bd');
        $log = new LoggerTXT(__DIR__ . '/../tmp/cadastroService.txt');
        
        $usario = new Usuario;
        
        $usario->nome = $_POST['nome'];
        $usario->senha =  password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $usario->email = $_POST['email'];
        
        $usario->store(Usuario::TABLENAME);
        
        $log->write('O admin: '. $usario->nome ." -> foi inserido");
        
        Transaction::close();
        
        header('Location: http://localhost:8080/projetorelogios/public/cadastrar');
        exit;
    }
} 
catch (\Throwable $th)
{
    Transaction::rollback();
    echo ("De erro em" . $th);
}
