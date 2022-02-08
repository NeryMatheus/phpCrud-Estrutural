<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar Usuários</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/e1b636d3b5.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container" style="margin-top: 40px;">
        <h3>Lista de Usuários</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>

            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca)) {

                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nome_usuario'];
                $mail = $array['mail_usuario'];
                $nivel = $array['nivel_usuario']
            ?>

                <tr>
                    <td><?php echo $nomeusuario ?></td>
                    <td><?php echo $mail ?></td>
                    <td><?php echo $nivel?></td>
                    <td>
                        <a class="btn btn-success btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="far fa-smile-beam"></i>&nbsp;Administrador</a>
                        <a class="btn btn-warning btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="far fa-smile-beam"></i>&nbsp;Funcionário</a>
                        <a class="btn btn-light btn-sm" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="far fa-smile-beam"></i>&nbsp;Conferente</a>
                        <a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>&nivel=<php echo $nivel>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Deletar</a>
                    </td>
                </tr>

            <?php } ?>
        </table>
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
        </div>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>