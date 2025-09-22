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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/all.min.css">
    <link href="imagens/icon.png" rel="shortcut icon">
    <title> Oásis </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bodylogin">

<div class="login">

    <form action="" method="POST">
        <h1 class="user-select-none">Cadastre-se</h1>

        <div class="input-box">
            <input type="text" placeholder="Nome Completo" name="user_name" required>
            <i class='bx bxs-user'></i>
        </div>
        
        <div class="input-box">
            <input type="text" placeholder="Email" name="user_email" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <input type="text" id="cpf" placeholder="CPF" name="user_cpf" required>
            <i class='bx bxs-id-card'></i>
        </div>
        
        <div class="input-box">
            <input type="password" placeholder="Senha" name="user_password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>

        <button type="submit" class="btn">Cadastre-se</button>

        
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js" type="module"></script>

<script src="https://unpkg.com/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>

<script>
    const cpfInput = document.getElementById('cpf');
    if (cpfInput) {
        VMasker(cpfInput).maskPattern('999.999.999-99');
    }
</script>

</body>
</html>



