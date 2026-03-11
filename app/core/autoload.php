<?php

require_once __DIR__ . '/config/constants.php';

function autoload($classe)
{
    $arquivo = DIR_APP . DS . str_replace('\\', DS, $classe) . '.php';

    if (file_exists($arquivo)) 
    {
        require_once $arquivo;
        return;
    }
    $arquivo = str_replace('\\', DS, $classe) . '.php';

    if (file_exists($arquivo))
    {
        require_once $arquivo;
    }
}

spl_autoload_register('autoload');