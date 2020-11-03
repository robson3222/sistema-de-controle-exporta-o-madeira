<?php

include 'conexao.php';

$id = $_POST['id'];
$importador = $_POST['importador'];
$cnpj = $_POST['cnpj'];
$conhecimentoaereo = $_POST['conhecimentoaereo'];
$origem = $_POST['origem'];
$naoconformidade = $_POST['naoconformidade'];
$numeronfa = $_POST['numeronfa'];
$datanfa = $_POST['datanfa'];
$representante = $_POST['representante'];
$notificadoReceita = $POST['notificadoReceita'];

 $sql = "UPDATE `madeira` SET `importador`='$importador',`cnpj`='$cnpj',`conhecimentoaereo`='$conhecimentoaereo',
`origem`='$origem',`naoconformidade`='$naoconformidade',`numeronfa`='$numeronfa',`datanfa`='$datanfa', `representante`= '$representante' ´notificadoReceita´= '$notificadoReceita'  WHERE  id_madeira = $id";

$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:500px; margin-top: 20px">
<center>
<h4>Importador adicionado com sucesso!</h4>
</center>
<div style="padding-top: 20px">
<center>
<a href="menu.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Importador </a>
</center>
</div>
</div>

