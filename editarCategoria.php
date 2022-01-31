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
    <title>Editando Categoria</title>
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
    <h3>Editando Categoria</h3>
        <form action="_atualizar_categoria.php" method="POST" style="margin-top: 20px;">

            <?php
                $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)){
                    
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                
            ?>

            <div class="form-group">
                <label>Nome da Categoria</label>
                <input type="text" class="form-control" name="nomeCategoria"  value="<?php echo $nome_categoria?>">
                <input type="text" class="form-control" name="id"  value="<?php echo $id_categoria?>" style="display: none;">
            </div>

            <div style="text-align:right;">
                <a href="listar_categoria.php" class="btn btn-sm btn-primary">Voltar</a>
                <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
            </div>
        <?php } ?>
        </form>
    </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>