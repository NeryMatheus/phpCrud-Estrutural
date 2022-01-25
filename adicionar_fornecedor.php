<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Fornecedor</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <div class="container" style="margin-top: 40px; width: 500px">
        <h4>Adicionar Fornecedor</h4>
        <form action="_inserir_fornecedor.php" method="POST">
            <div class="form-group">
                <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" autocomplete="off">
            </div>
            <div style="text-align: right;">
                <button type="submit" class="btn btn-primary btn-sm">Adicionar</button>
                <a href="index.php" role="button" class="btn btn-warning btn-sm">Início</a>
            </div>
        </form>
    </div>

</body>

</html>