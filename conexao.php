<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$base = "imc_db";



$mysqli = new mysqli($hostname, $user, $pass, $base);
if ($mysqli -> connect_errno) {
    echo "Falha ao conectar no banco de dados: (" . $mysqli -> connect_errno .") " . $mysql -> connect_error;
}
