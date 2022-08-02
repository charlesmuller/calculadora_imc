<?php

$hostname = "mysql.charlesmuller.kinghost.net";
$user = "charlesmuller01";
$pass = "calculadora01";
$base = "charlesmuller01";


$conecta = mysqli_connect($hostname, $user, $pass, $base);

if(mysqli_connect_errno()){
    printf("Conexão Falhou %s\n", mysqli_connect_errno());
    exit();
}
include('valida.php');

?>