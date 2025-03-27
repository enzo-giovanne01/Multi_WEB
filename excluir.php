<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa WHERE id=$id";
    if(mysqli_query($conn, $sql)){

        echo "<script language = 'javascript' type='text/javascript'>
        alert('Pessoa excluida com sucesso!');
        window.location.href='index.php';
        </script>";
    }else{
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>