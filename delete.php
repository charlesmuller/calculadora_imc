<?php

if(!empty($_GET['id'])){

    include('conexao.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM dados WHERE id=$id";
    $result = $conecta->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM dados WHERE id=$id";
        $resultDelete = $conecta->query($sqlDelete);
    }
}
header('Location: index.php');
?>