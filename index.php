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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Calculadora IMC</title>
</head>
<body>
<div class="container">
        <form>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
            <div class="col-sm-10">
            <input type="text" name="nome" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Nome" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Altura</label>
            <div class="col-sm-10">
            <input type="double" name="altura" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ex.: 1.80" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Peso</label>
            <div class="col-sm-10">
            <input type="double" name="peso" class="form-control form-control-lg" id="colFormLabelLg" placeholder="ex.: 78.70" required>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" value="Calcular" class="btn btn-primary mb-2">Calcular</button>
        </div>
        </form>

        <!--Tabela de dados -->

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">IMC</th>
                <th scope="col">Classificação</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($dados_usuario = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>" . $dados_usuario['nome'] . "</td>";
                        echo "<td>" . $dados_usuario['imc'] . "</td>";
                        echo "<td>" . $dados_usuario['classificacao'] . "</td>";
                        echo "<td> 
                        <a href='delete.php?id=$dados_usuario[id]'> <button type='button' class='btn btn-outline-danger'>Excluir</button> </td>
                        </a>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
</div>
</body>
</html>