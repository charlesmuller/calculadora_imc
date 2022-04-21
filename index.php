<?php
        include 'conexao.php';
        $sql = "SELECT * FROM dados";
        $result = $conecta->query($sql);
            
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
    <div>
    <table class="table" border="1">
        <tr>
            <td>Nome</td>
            <td>IMC</td>
            <td>Classificação</td>
        </tr>
    </table>
    <?php
        while($dados_usuario = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $dados_usuario['nome'] . "</td>";
            echo "<td>" . $dados_usuario['imc'] . "</td>";
            echo "<td>" . $dados_usuario['classificacao'] . "</td>";
            echo "<tr>";
        }

    ?>
    </div>
</body>
</html>