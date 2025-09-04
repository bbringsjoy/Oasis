<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}
echo "<h1>Bem-vindo, {$_SESSION['usuario']}!</h1>";
echo "<a href='logout.php'>Sair</a>";
