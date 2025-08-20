<?php

$usuario = "root";
$senha = "";
$database = "oasis";
$host = "localhost";

$mysqli = new mysqli($usuario, $senha, $database, $host);

if ($mysqli->connect_error) {
    die("Falha ao conectar: " . $mysqli->connect_error);
}

?>