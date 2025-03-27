<?php
    include  'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $celular = $_POST['celular'];
    $sql = "UPDATE pessoa SET nome=?,cidade=?,celular=? WHERE id=?";
    $pes = $conn->prepare($sql) or die ($conn->error);
    if(!$pes){
        echo $conn->error;
    }
    $pes->bind_param('sssi',$nome,$cidade,$celular,$id);
    $pes->execute();
    $pes->close();
    header("location: index.php");
?>