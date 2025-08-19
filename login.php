<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

  if(strlen($_POST['email']) == 0) {
    echo "Digite seu email";
  } else if(strlen($_POST['senha']) == 0) {
    echo "Digite sua senha";
  } else {
    $email = $mysqli->real_escape_string($_POST["email"]);
    $senha = $mysqli->real_escape_string($_POST["senha"]);
    
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_code = $mysqli->query($sql_code) or die("Falha na execuçãp do código: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;
    if($quantidade == 1){
      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['user'] = $usuario['id'];
      $_SESSION['name'] = $usuario['nome'];

      header("Location: pages/conta.php");

    } else {
      echo "Falha ao logar! Email ou senha incorretos.";
    }
  }

    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/all.min.css"> <!-- Font Awesome -->
    
    <link href="imagens/icon.png" rel="shortcut icon">

    <title> Oásis </title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><!-- animação git -->

    <link rel="stylesheet" href="style.css">
</head>
<body class="bodylogin">

<div class="login">

<form action="">

<h1 class="user-select-none">Login</h1>

<div class="input-box">

<input type="text" placeholder="Email" required>

<i class='bx. bxs-user'></i>

</div>

<div class="input-box">

<input type="password" placeholder="Senha" required>

<i class='bx bxs-lock-alt'></i>

</div>

<div class="esqueceu-senha">

<label><input type="checkbox">Lembre de mim</label>

<a href="#">Esqueceu a senha?</a>

</div>

<button type="submit" class="btn">Login</button>

<div class="cadastro">

<p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui!</a></p>

</div>

</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))// const do popOver do bootstrap
</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script><!-- script animaçao -->
<script>
  AOS.init();
</script>

 <script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js" type="module"></script><!-- script lightbox -->
 


</body>
</html>