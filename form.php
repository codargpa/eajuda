
<?php
 include_once('config.php');
if (isset($_POST['submit'])){
    /*print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['senha']);
    print_r('<br>');
    print_r($_POST['email']);*/
    
    $email=$_POST['email'];
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    $cpf=$_POST ['cpf'];                                                                                                  $telefone=$_POST['telefone'];
    $habilidade=$_POST['habilidade'];
    $disponibilidade=$_POST['disponibilidade'];
    $sexo=$_POST['genero'];
    $data_nasc=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];
    $result=mysqli_query($conn, "INSERT INTO tb_usuario(ds_email, ds_nome, ds_senha,  ds_cpf, ds_telefone, ds_habilidade, ds_disponibilidade, ds_sexo, ds_data_nasc, ds_cidade, ds_estado, ds_endereco) VALUES('$email', '$nome','$senha','$cpf', '$telefone', '$habilidade', '$disponibilidade', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    header('Location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
            body{
            background-color: #f2f2f2;
        }
        .form{
            width:100%;
            height: 100%;
            align-items:center;
            justify-content:center;
            display: flex;
        }
    
    </style>
</head>
<body>
<div class="form">    
<div class="box">
        <form action="form.php" method="post">
            <fieldset>
                <legend><b>CADASTRO DE VOLUNTÁRIO</b></legend>
                <br>
                
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="habilidade" id="habilidade" class="inputUser" required>
                    <label for="habilidade" class="labelInput">Habilidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="disponibilidade" id="disponibilidade" class="inputUser" required>
                    <label for="disponibilidade" class="labelInput">Disponibilidade</label>
                </div>
                
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    </div>
</body>
</html>