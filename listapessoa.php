<?php
    include 'conecta.php';
    $pessoas = mysqli_query($conn,"SELECT * FROM pessoa");
    $registros = mysqli_num_rows($pessoas);
    if ($registros > 0){
        echo "<table class= 'table table-hover'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NOME</th>";
        echo "<th>CIDADE</th>";
        echo "<th>CELULAR</th>";
        echo "<th>AÇÕES</th>";
        echo "<th>";
        echo "</thead>";
        echo "<tbody>";
        while ($registro = $pessoas->fetch_array()){
            $id = $registro['id'];
            echo "<tr>";
            echo "<td>".$registro['id']."</td>";
            echo "<td>".$registro['nome']."</td>";
            echo "<td>".$registro['cidade']."</td>";
            echo "<td>".$registro['celular']."</td>";
            echo "<td><a href='editar.php?id=$id'>Editar</a> | <a href = 'excluir.php?id=$id'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    else{
        echo "<center><h3>NENHUMA PESSOA CADASTRADA!</h3></center>";
    }
    echo "Total de pessoas cadastradas: ".$registros;
?>