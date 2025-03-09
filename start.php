<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Database;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
$db = new Database();
$dbConnection = $db->connect();

