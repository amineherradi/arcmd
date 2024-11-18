<?php

use Amine\Arcmd\Resources\EntityGenerator;

include_once 'bootstrap.php';

global $log;
global $pdo;
global $connexion;

(new EntityGenerator($pdo, $connexion, $log))->generateEntities();
