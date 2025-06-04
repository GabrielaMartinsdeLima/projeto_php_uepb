<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->loadEnv(__DIR__ . '/../.env');

// Deixa as variáveis disponíveis via getenv()
foreach ($_ENV as $key => $value) {
    putenv("$key=$value");
}