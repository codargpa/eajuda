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
/*if (empty($_SESSION)){
    print "<script> location.href='index.php';</script>";
}
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class= "navbar-brand">EAJUDA</a>
            <?php 
            print "Olá, ".$_SESSION["nome"];
            //print "Olá, ".$_SESSION["id"];
            print "<a href='logout.php' class='btn-danger'>Sair</a>";
            ?>
            
        </div>

    </nav>
    <a href='formalt.php'>editar</a>
</body>
</html>