<?php 
include_once ('config.php');

if(isset($_POST['update'])){
    $id=$_POST['id'];
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
    
    $sqlUpdate = "UPDATE tb_usuario SET ds_email='$email',ds_nome='$nome',ds_senha='$senha',ds_cpf='$cpf',ds_telefone='$telefone',ds_habilidade='$habilidade',ds_disponibilidade='$disponibilidade',ds_sexo='$sexo',ds_data_nasc='$data_nasc',ds_cidade='$cidade',ds_estado='$estado',ds_endereco='$endereco' WHERE id_usuario=$id";

    $result = $conn->query($sqlUpdate);
    
}
header('Location:dashboard.php')

?>