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

<div class="container" style="margin-top: 40px; width: 500px;">
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nome Categoria</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>

        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `categoria`";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)){
                
                $id_categoria = $array['id_categoria'];
                $nome_categoria = $array['nome_categoria'];
        ?>
        
        <tr>
            <td><?php echo $nome_categoria?></td>
        <td>
            <a class="btn btn-warning btn-sm" href="editarCategoria.php?id=<?php echo $id_categoria?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" href="deletarCategoria.php?id=<?php echo $id_categoria?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a>
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