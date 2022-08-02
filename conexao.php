<?php

$hostname = "mysql.charlesmuller.kinghost.net";
$user = "charlesmuller01";
$pass = "calculadora01";
$base = "charlesmuller01";

$conecta = mysqli_connect($hostname, $user, $pass, $base) or die ("Falha ao conectar no banco de dados");

include('valida.php');

?>