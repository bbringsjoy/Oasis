<?php

$usuario = "root";
$senha = "";
$database = "oasis";
$host = "localhost";

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error) {
    die("Falha ao conectar: " . $mysqli->connect_error);
}

?>