<?php
use App\Controllers\NotFoundController;
use App\Controllers\UserController; 
use App\Controllers\SampleController;


require_once __DIR__ . '/../vendor/autoload.php';


$uri = $_SERVER['REQUEST_URI'];

$pages = [
    '/user' => [new UserController, 'render'],  
    '/user/create' => [new UserController, 'create'],
    '/sample' => [new SampleController, 'render']
];


$controller = $pages[$uri] ?? [new NotFoundController, 'render'];

call_user_func($controller);

?>

