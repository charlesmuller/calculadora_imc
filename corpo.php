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