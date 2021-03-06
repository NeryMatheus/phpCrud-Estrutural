<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!-- Importes CDN - Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

    <?php
        $usuario = $_SESSION['usuario'];
        if (!isset($usuario)) {
            header("Location: index.php");
        }
    ?>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Produto</h5>
                        <p class="card-text">Opção para adicionar produtos em nosso estoque</p>
                        <a href="adicionarProduto.php" class="btn btn-primary">Cadastrar Produto</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listar Produtos</h5>
                        <p class="card-text">Visualizar, editar e excluir produtos</p>
                        <a href="listar_produto.php" class="btn btn-primary">Produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Categoria</h5>
                        <p class="card-text">Opção para adicionar categoria de produtos</p>
                        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Adicionar Fornecedor</h5>
                        <p class="card-text">Opção para adicionar fornecedores</p>
                        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar fornecedores</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aprovar usuários</h5>
                        <p class="card-text">Aprovar usuários cadastrados!</p>
                        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>