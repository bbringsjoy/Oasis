<?php

namespace App\Controllers;

use App\Model\User;

require_once __DIR__ . '/../vendor/autoload.php';

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

    public function render(): void    {
        echo "User page";
    }
	
}

?>