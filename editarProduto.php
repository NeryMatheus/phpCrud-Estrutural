<?php
include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando produto</title>
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
    <h3>Editando Produto</h3>
        <form action="_atualizar_produto.php" method="POST" style="margin-top: 20px;">

            <?php
                $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)){
                    
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                
            ?>

            <div class="form-group">
                <label>Número do Produto</label>
                <input type="number" class="form-control" name="nroProduto" value="<?php echo $nroproduto?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display: none">
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto"  value="<?php echo $nomeproduto?>">
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                    <option>Periféricos</option>
                    <option>Hardwares</option>
                    <option>Softwares</option>
                    <option>Celulares</option>
                </select>
            </div>

            <div class="form-group">
                <label>Quantidade do Produto</label>
                <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade?>">
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>

            <div style="text-align:right;">
                <a href="listar_produto.php" class="btn btn-sm btn-primary">Voltar</a>
                <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
            </div>
        <?php } ?>
        </form>
    </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>