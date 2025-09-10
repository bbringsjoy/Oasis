<?php

namespace App\Controllers;

use App\Controllers\NotFound;
use App\Controllers\UserController; 

require_once __DIR__ . '/../vendor/autoload.php';


$uri = $_SERVER['REQUEST_URI'];

$pages = [
    '/user' => new UserController
];

$controller = $pages[$uri] ?? new NotFound();
$controller->render();

?>