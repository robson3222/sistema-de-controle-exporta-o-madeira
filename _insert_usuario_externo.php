<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status = 'inativo';


$sql = "INSERT INTO usuarios (nome_usuario, mail_usuario,senha_usuario,status) values ('$nomeusuario','$mail',sha1('$senha'),'$status')";

$inserir = mysqli_query($conexao, $sql);


?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:400px">
<center>
<h3>Usuario cadastrado com sucesso, esperando aprovação<h3>
<div style="margin-top: 10px">
<a href="cadastro_usuario.php" class="btb btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>

</div>