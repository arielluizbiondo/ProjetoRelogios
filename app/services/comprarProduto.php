<?php

require_once __DIR__ . '/../core/autoload.php';
require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/orm/Record.php';
require_once __DIR__ . '/../core/orm/Repository.php';
require_once __DIR__ . '/../core/orm/Criteria.php';

use core\database\Transaction;
use models\Relogio;
use orm\Criteria;
use orm\Repository;

class comprarProduto
{
    public function selectComprarProduto()
    {
        try 
        {
            Transaction::open('bd');

            $id = intval($_POST['id']);

            $criteria = new Criteria;

            $criteria->add("id", "=", $id);

            $repository = new Repository(Relogio::class);

            $relogios = $repository->load($criteria);

            Transaction::close();
            if ($relogios)
            {
                return $relogios[0];
            }
        } 
        catch (\Throwable $th)
        {
            Transaction::rollback();
            echo "Deu erro: " . $th->getMessage();
        }
    }
}
?>