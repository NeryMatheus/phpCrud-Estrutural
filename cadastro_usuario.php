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
  
<div class="container" style="width: 400px; margin-top: 40px;">
    <h4>Cadastro de Usuário</h4>
    <form action="_insert_usuario.php" method="POST">
        <div class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" name="nomeusuario" class="form-control" autocomplete="off" placeholder="Nome completo" required>
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="mailusuario" class="form-control" autocomplete="off" placeholder="Seu e-mail" required>
        </div>

        <div class="form-group">
            <label>Senha do Usuário</label>
            <input id="txtSenha" type="password" name="senhausuario" class="form-control" autocomplete="off" required>
        </div> 

        <div class="form-group">
            <label>Repetir senha</label>
            <input type="password" name="senhausuario2" class="form-control" autocomplete="off" required oninput="validaSenha(this)">
            <small>As senhas precisam ser idênticas</small>
        </div> 

        <div class="form-group">
            <label>Nível de Acesso</label>
            <select name="nivelusuario" class="form-control">
                <optgroup>
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </optgroup>
            </select>
        </div>

        <div style="text-align: rigth;">
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>  
    </form>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

<script>
    function validaSenha(input) {
        if(input.value != document.getElementById('txtSenha').value){
            input.setCustomValidity("Senhas não conferem!");
        }else{
            input.setCustomValidity('');
        }
    }
</script>
</body>
</html>