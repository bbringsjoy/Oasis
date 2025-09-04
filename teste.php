<?php
require __DIR__ . '/vendor/autoload.php';

use App\Database\Connection;

$db = Connection::getInstance();
echo "Conexão OK!";
