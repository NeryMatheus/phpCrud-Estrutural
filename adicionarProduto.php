<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <!-- Importes CDN - Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        #maxContainer{
            width: 500px;
            margin-top: 40px;
        }
        #botao{
            background-color: #ff1168;
            color: #fff;
        }
    </style>

</head>
<body>

    <div class="container" id="maxContainer">
    <h3>Formulário de Cadastro</h3>
        <form action="_inserir_produto.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label>Número do Produto</label>
                <input type="number" class="form-control" name="nroProduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">

                    <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                        $buscar = mysqli_query($conexao, $sql);

                        while($array = mysqli_fetch_array($buscar)){
                            $id_categoria = $array['id_categoria'];
                            $nome_categoria = $array['nome_categoria'];
                    ?>

                    <option><?php echo $nome_categoria?></option>

                    <?php }?>

                </select>
            </div>

            <div class="form-group">
                <label>Quantidade do Produto</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <?php 
                        include 'conexao.php';
                        $sql2 = "SELECT * FROM fornecedor";
                        $buscar2 = mysqli_query($conexao, $sql2);

                        while($array2 = mysqli_fetch_array($buscar2)){
                            $id_fornecedor = $array2['id_forn'];
                            $nome_fornecedor = $array2['nome_forn'];
                    ?>
                    <option><?php echo $nome_fornecedor?></option>
                    <?php }?>
                </select>
            </div>

            <div style="text-align:right;">
                <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>    
            </div>
        </form>
    </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>