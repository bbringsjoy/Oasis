<?php
$senha_texto_puro = '12345'; // Coloque a senha que você quer usar
$hash_da_senha = password_hash($senha_texto_puro, PASSWORD_DEFAULT);
echo $hash_da_senha;
?>