<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/e1b636d3b5.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="margin-top: 40px;">
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>

        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `estoque`";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)){
                
                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
        ?>
        
        <tr>
        <td><?php echo $nroproduto?></td>
        <td><?php echo $nomeproduto?></td>
        <td><?php echo $categoria?></td>
        <td><?php echo $quantidade?></td>
        <td><?php echo $fornecedor?></td>
        <td>
            <a class="btn btn-warning btn-sm" href="editarProduto.php?id=<?php echo $id_estoque?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" href="deletarProduto.php?id=<?php echo $id_estoque?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a>
        </td>
        </tr>
        
        <?php } ?>
    </table>
    <div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
    </div>
</div>


<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>