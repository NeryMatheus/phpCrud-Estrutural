<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanho {
            width: 350px;
            margin-top: 100px;
            border-radius: 15px;
            border: 2px solid #f3f3f3;
            padding: 10px;
            -webkit-box-shadow: 10px 10px 28px -8px rgba(194, 194, 194, 1);
            -moz-box-shadow: 10px 10px 28px -8px rgba(194, 194, 194, 1);
            box-shadow: 10px 10px 28px -8px rgba(194, 194, 194, 1);
        }
    </style>
</head>

<body>

    <div class="container" id="tamanho">
        <center>
            <img src="img/cadeado.png" width="125px;" height="125px;">
        </center>
        <form>
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
            </div>
        </form>

        <div style="text-align:center;">
            <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>

    </div>

    <div style="margin-top: 10px;">
        <center>
            <small>Você não possui cadastro. Clique <a href="cadastro_usuario_externo.php">aqui</a></small>
        </center>
    </div>

    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>