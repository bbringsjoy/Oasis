<?php

namespace App\Controller;

use App\Model\User;

require_once __DIR__ . '/../vendor/autoload.php';


$uri = $_SERVER['REQUEST_URI'];

$pages = [
    '/user' => new UserController()
];

$uri[$pages];
class UserController
{
    public function __construct()
    {
        if($_POST){

        $user = new User(
        name: $_POST['user_name'],
        email: $_POST['user_email'],
        cpf: $_POST['user_cpf'],
        password: $_POST['user_password']
       
        
    );
    
    $user->save();

}

    include __DIR__ . '/../View/user.phtml';

    }
	
}

?>