<?php
use Framework\Database\Connection;
require_once __DIR__ .  '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

dd($_ENV['DB_HOST']);