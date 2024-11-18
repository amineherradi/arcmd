<?php

use Amine\Arcmd\Resources\DataGenerator;

include_once 'bootstrap.php';

global $connexion;
global $pdo;
global $log;

if (empty($lots)) {
    $lots = (new DataGenerator($pdo, $connexion, $log))->generateLots(10, 3);
}

$number = 20;
$generator = new DataGenerator($pdo, $connexion, $log);
for ($i = 0; $i < $number; $i++) {
    $generator->generateFTCCommunes($lots);
    $generator->generateFTCIris($lots);
    $generator->generateFCFCommunes($lots);
    $generator->generateFCFIris($lots);
}
