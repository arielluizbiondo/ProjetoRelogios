<?php
require_once __DIR__ . '/../core/autoload.php';
require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/orm/Record.php';
require_once __DIR__ . '/../core/orm/Repository.php';
require_once __DIR__ . '/../core/orm/Criteria.php';

use core\database\Transaction;
use core\database\Connection;
use core\log\Logger;
use core\log\LoggerTXT;
use models\Relogio;

try 
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        Transaction::open('bd');

        $log = new LoggerTXT(__DIR__ . '/../tmp/updateProdutoService.txt');

        $relogio = new Relogio($_POST['id']);

        $relogio->nome = $_POST['nome'];
        $relogio->descricao = $_POST['descricao'];
        $relogio->valor = $_POST['valor'];
        $relogio->genero = $_POST['genero'];

        $relogio->store(Relogio::TABLENAME);

        $log->write('Produto atualizado: ' . $relogio->nome);

        Transaction::close();
        
        header('Location: http://localhost:8080/projetorelogios/public/admin-logado');
        exit;
    }
} 
catch (\Throwable $th)
{
    Transaction::rollback();
    echo "Deu erro: " . $th->getMessage();
}
