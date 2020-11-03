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


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:400px">
<center>
<h3>Atualizado com sucesso!<h3>
<div style="margin-top: 10px">
<a href="pesquisardat.php" class="btb btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>

</div>