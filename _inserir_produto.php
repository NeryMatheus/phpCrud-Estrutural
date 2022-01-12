<?php

    include 'conexao.php';

    $nroProduto = $_POST['nroProduto']; // Recebe valor do atributo name
    $nomeProduto = $_POST['nomeProduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

   $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroProduto,'$nomeProduto','$categoria','$quantidade','$fornecedor')";

   $inserir = mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 500px;">
    <center>
        <h4 style="margin-top: 20px;">Produto adicionado com sucesso!</h4>
    </center>
    <div style="padding-top: 20px;">
        <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
        </center>
    </div>
</div>