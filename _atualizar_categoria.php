<?php

include 'conexao.php';

$id = $_POST['id'];
$nomeCategoria = $_POST['nomeCategoria'];

$sql = "UPDATE `categoria` SET `nome_categoria`='$nomeCategoria' WHERE id_categoria = $id";

$atualizar = mysqli_query($conexao, $sql);


?>
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width:400px;">
    <center>
        <h3>Categoria atualizada com sucesso!</h3>
        <div style="margin-top: 10px;">
            <a href="listar_categoria.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
        </div>
    </center>
</div>