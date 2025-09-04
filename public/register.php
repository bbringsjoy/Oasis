<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\AuthController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $auth = new AuthController();
    if ($auth->registrar($nome, $email, $senha)) {
        echo "<p>✅ Cadastro realizado com sucesso!</p>";
        echo "<a href='index.php'>Ir para o login</a>";
    } else {
        echo "<p>❌ Erro ao cadastrar. Tente novamente.</p>";
        echo "<a href='cadastro.php'>Voltar</a>";
    }
}
