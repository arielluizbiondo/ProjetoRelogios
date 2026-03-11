<?php

use models\Usuario;

    if(Usuario::TABLENAME === 'usuario')
    {
        echo 'Teste - Deu certo';
    }
    else
    {
        echo 'Teste - Deu errado';
    }

?>