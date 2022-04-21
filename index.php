<?php
        include 'conexao.php';
        $sql = "SELECT * FROM `dados` WHERE id=7";
        $result = $conecta->query($sql);
        print_r($result);      
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>
    <form method="get" action="conexao.php">
        <label>Nome:</label><br/>
        <input type="text" name="nome"><br/>

        <label>Altura:</label><br/>
        <input type="double" name="altura"><br/>

        <label>Peso:</label><br/>
        <input type="double" name="peso"><br/><br/>

        <input type="submit" value="Calcular"/>
    </form>
</body>
</html>