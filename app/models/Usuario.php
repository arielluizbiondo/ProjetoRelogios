<?php

namespace models;

require_once __DIR__ . '/../core/config/constants.php';
require_once __DIR__ . '/../core/autoload.php';
require_once __DIR__ . '/../core/orm/Record.php';

use orm\Record;

class Usuario extends Record
{
    const TABLENAME = 'usuario';
}