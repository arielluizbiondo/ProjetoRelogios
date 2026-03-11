<?php

use models\Relogio;

    if(Relogio::TABLENAME === 'relogio')
    {
        echo 'Teste - Deu certo';
    }
    else
    {
        echo 'Teste - Deu errado';
    }

?>