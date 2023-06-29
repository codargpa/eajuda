<?php 
 require_once  '../../vendor/autoload.php';
 use  Firebase\JWT\JWT;
 session_start();
 if (empty($_POST)or (empty($_POST["email"])or (empty($_POST["senha"])))){
      print "<script>location.href='index.php';</script>";
      
 }
 $tokenPayload = ['email' => $email];
$jwtKey = 'secreta123';
$jwt = JWT::encode($tokenPayload, $jwtKey);
$_SESSION['jwt_token'] = $jwt;
 include ('config.php');
 
 $email=$_POST["email"];
 $senha= $_POST["senha"];
 

 $sql= "SELECT * FROM tb_usuario where ds_email= '{$email}' AND ds_senha= '{$senha}'";

 $res = $conn->query($sql) or die ($conn->error);

 $row = $res->fetch_object();
 $qtd = $res->num_rows;
 //$id = $row->id_usuario;
 

 if ($qtd > 0){
    $_SESSION["email"] =$email;
    $_SESSION["nome"]= $row->ds_nome;
    $_SESSION["id"]= $row->id_usuario;
    print "<script>location.href='dashboard.php';</script>";
    //print_r($_SESSION["id"]);
 }else {
    print "<script>alert('Usuário ou senha incorreto')</script>";
    print "<script>location.href='index.php';</script>";
 }
?>