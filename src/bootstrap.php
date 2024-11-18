<?php

include_once '../vendor/autoload.php';

use Dotenv\Dotenv;
use Illuminate\Database\Connection;
use Illuminate\Database\Query\Grammars\MySqlGrammar;
use Monolog\Formatter\JsonFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


global $log;
global $pdo;
global $connexion;

$env = Dotenv::createImmutable(__DIR__)->load();

$jsonFormatter = new JsonFormatter(JSON_PRETTY_PRINT);
$streamHandler = new StreamHandler(__DIR__.'/Logs/'.date('Ymd').'.log');
$streamHandler->setFormatter($jsonFormatter);

$log = new Logger('ARCMD');
$log->pushHandler($streamHandler);

$pdo = new PDO($_ENV["DB_DSN"], $_ENV["DB_USER"], $_ENV["DB_PASS"]);
$connexion = (new Connection($pdo))->setQueryGrammar(new MySqlGrammar());
