<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $celular = $_POST['celular'];
    // isset é um comando php que verifica se a variave lfoi iniciada ou nao
    if (!isset($nome) || !isset($cidade )|| !isset($celular))
    {
        echo "<script language = 'javascript' type='text/javascript'>
        alert('Por favor, digite todos os campos!');
        window.location.href='index.php';
        </script>";
    }
    $sql = "INSERT INTO pessoa(nome,cidade,celular) VALUES ('$nome','$cidade','$celular')";
    if(mysqli_query($conn, $sql))
    {
        echo "<script language = 'javascript' type='text/javascript'>
        alert('Pessoa cadastrada com sucesso!');
        window.location.href='index.php';
        </script>";
    }else {
        echo mysqli_error($conn);
    }
    mysqli_close($conn);
?>