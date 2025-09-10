<?php
use App\Model\User;
require __DIR__ . '/../vendor/autoload.php';



if($_POST){

    $user = new User(
        name: $_POST['user_name'],
        email: $_POST['user_email'],
        cpf: $_POST['user_cpf'],
        password: $_POST['user_password']
       
        
    );
    
    $user->save();
}
$users = User::findAll();
?>




