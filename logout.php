<?php 
session_start();
unset($_SESSION["email"]);
unset($_SESSION["nome"]);
unset($_SESSION["id_usuario"]);
unset($_SESSION["jwt_token"]);
session_destroy();
header("location: index.php");
exit;
?>