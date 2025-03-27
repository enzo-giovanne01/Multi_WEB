<?php
    include 'conecta.php';
    $id = $_GET["id"];
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $query = $conn->query($sql);
    while($dados = $query->fetch_array()){
        $nome = $dados['nome'];
        $cidade = $dados['cidade'];
        $celular = $dados['celular'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>MULTIPLATAFORMA</title>
</head>

<body>
    <center>
        <h2><b>MULTIPLATAFORMA</b></h2>
    </center>
    <hr />
    <br />
    <br />
    <br />
    <br />
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 text-center">
            <div class="col-md-12">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">
                        <h3><b>MULTIPLATAFORMA</b></h3>
                    </div>
                    <div class="card-body text-start">
                    <form action="edpessoa.php?id=<?php echo $id;?>" method="post">
                        <label>NOME</label>
                        <input type="text" class="form-control" name="nome"  value="<?php echo $nome;?>"/> 
                        <br/>
                        <label>CIDADE</label>
                        <input type="text" class="form-control" name="cidade"   value="<?php echo $cidade;?>"/>
                        <br/>
                        <label> CELULAR</label>
                        <input type="text" class="form-control" name="celular"   value="<?php echo $celular;?>"/>
                        <button type="submit" class="btn btn-outline-success">ATUALIZAR</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
</body>
</html>