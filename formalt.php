<?php
require_once  '../../vendor/autoload.php';
use Firebase\JWT\JWT;

session_start();

$jwtKey = 'secreta123';

if (isset($_SESSION['jwt_token'])) {
    $jwt = $_SESSION['jwt_token'];

    try {
        $tokenPayload = JWT::decode($jwt, $jwtKey, ['HS256']);
        $email = $tokenPayload->email;

        // Faça as ações necessárias para o usuário autenticado, como carregar dados do usuário, etc.
    } catch (Exception $e) {
        // O token é inválido ou expirou. Faça o tratamento adequado, como redirecionar para a página de login.
        print "<script> location.href='index.php';</script>";
    }
} else {
    // O token não está presente na sessão. Redirecione para a página de login.
    print "<script> location.href='index.php';</script>";
}
$idu=$_SESSION["id"];
 include_once('config.php');
$sqlSelect="SELECT * FROM tb_usuario WHERE id_usuario = $idu";
$result=$conn->query($sqlSelect);
//print_r($result);
if ($result ->num_rows>0){

    
    while($user_data = mysqli_fetch_assoc($result)){

    $email=$user_data['ds_email'];
    $nome=$user_data['ds_nome'];
    $senha=$user_data['ds_senha'];
    $cpf=$user_data ['ds_cpf'];                                                                      
    $telefone=$user_data['ds_telefone'];
    $habilidade=$user_data['ds_habilidade'];
    $disponibilidade=$user_data['ds_disponibilidade'];
    $sexo=$user_data['ds_sexo'];
    $data_nasc=$user_data['ds_data_nasc'];
    $cidade=$user_data['ds_cidade'];
    $estado=$user_data['ds_estado'];
    $endereco=$user_data['ds_endereco'];
    }
   // print_r($nome);
    

    }else {
    header('location:index.php');
    
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
        <form action="up.php" method="POST">
            <fieldset>
                <legend><b>CADASTRO DE VOLUNTÁRIO</b></legend>
                <br>
                
                <div class="inputBox">
                <label for="email" class="labelInput">Email</label>    
                <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="nome" class="labelInput">Nome completo</label>
                <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="senha" class="labelInput">Senha</label>
                <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="cpf" class="labelInput">CPF</label>
                <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="telefone" class="labelInput">Telefone</label>
                <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="habilidade" class="labelInput">Habilidade</label>
                <input type="text" name="habilidade" id="habilidade" class="inputUser" value="<?php echo $habilidade ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="disponibilidade" class="labelInput">Disponibilidade</label>
                <input type="text" name="disponibilidade" id="disponibilidade" class="inputUser" value="<?php echo $disponibilidade ?>"required>
                </div>
                <p>Sexo:</p>
                <label for="feminino">Feminino</label>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo $sexo == "feminino" ? 'checked':''?> required>
                <br>
                <label for="masculino">Masculino</label>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo $sexo == "masculino" ? 'checked':''?>required>
                <br>
                <label for="outro">Outro</label>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo $sexo == "outro" ? 'checked' : '' ?> required>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"required>
                <br><br><br>
                <div class="inputBox">
                <label for="cidade" class="labelInput">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="estado" class="labelInput">Estado</label>
                <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="endereco" class="labelInput">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $idu?>">
                <input type="submit" name="update" id="update">
                
            </fieldset>
        </form>
    </div>
    </div>
</body>
</html>