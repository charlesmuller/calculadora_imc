<?php

$hostname = "localhost";
$user = "root";
$pass = "";
$base = "imc_db";

$conecta = mysqli_connect($hostname, $user, $pass, $base) or die ("Falha ao conectar no banco de dados");

            if(isset($_GET['nome']) and isset($_GET['altura']) and isset($_GET['peso'])){
                $nome   = $_GET['nome'];
                $altura = $_GET['altura'];
                $peso   = $_GET['peso'];

                        $imc = $peso / ($altura * $altura);
                        $aux = $imc;
                
                        if($aux < 18.5){
                            $classificacao = "Abaixo do peso";
                        }elseif($aux >= 18.5 and $aux <= 24.9){
                            $classificacao = "Peso ideal";
                        }else{
                        $classificacao = "Acima do peso";
                        }
                
                        $query = mysqli_query($conecta, "INSERT INTO dados (nome,imc,classificacao) VALUES ('$nome', '$imc', '$classificacao')");
                
                        header('Location: index.php');                
            }
?>