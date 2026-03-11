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


class produtoService
{
    public function listarRelogiosMasculinos()
    {
        try 
        {
            Transaction::open('bd');
            
            $criteria = new Criteria();
            $criteria->add("genero", "=", "m");
    
            $repository = new Repository(Relogio::class);
    
            $relogios = $repository->load($criteria);
            return $relogios;   
        } 
        catch (\Throwable $th) 
        {
            Transaction::rollback();
            echo 'Nenhum relógio disponivel';
        }
    } 

    public function listarRelogiosFeminino()
    {
        try 
        {
            Transaction::open('bd');
            
            $criteria = new Criteria();
            $criteria->add("genero", "=", "f");
    
            $repository = new Repository(Relogio::class);
    
            $relogios = $repository->load($criteria);
            return $relogios;   
        } 
        catch (\Throwable $th) 
        {
            Transaction::rollback();
            echo 'Nenhum relógio disponivel';
        }
    } 
}