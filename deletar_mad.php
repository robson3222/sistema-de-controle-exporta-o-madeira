<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `madeira` WHERE id_madeira = $id";

$deletar = mysqli_query($conexao,$sql)

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container" style="width:400px">
<center>
<h3>Deletado com sucesso!<h3>
<div style="margin-top: 10px">
<a href="pesquisardat.php" class="btb btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>

</div>