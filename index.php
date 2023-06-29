<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            background-color: #f2f2f2;
        }
        .login{
            width:100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }

    </style>
</head>
<body >
    <div class="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
            <div class="card">
            <div class="card-body">
                
                    <h3>Acesso restrito</h3>
                
            <form action="login.php" method="POST">
            <div>
            <div class= "mb-3">
                <label> Usuário</label>
                <input type="email" name="email" class= "form-control">
            </div>
            </div>
                <div>
                    <div class="mb-3">
                    <label> Senha</label>
                <input type="password" name="senha" class= "form-control">
                    </div>
            </div>
            <div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="form.php">CADASTRO</a>
                </div>
            </div>
            </form>
            </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>