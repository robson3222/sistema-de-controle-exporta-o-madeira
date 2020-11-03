<?php
include 'conexao.php';

 $id = $_GET['id'];



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prazo Madeira</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
<style type="text/css">
#tamanhoContainer{
    width: 600px;
}
</style>

</head>
<body>
    






<div class="container" style= "margin-top: 48px">
<form action="_atualizar_madprazo.php" method="POST" style="margin-top: 20px">
  <?php

  $sql = "SELECT * FROM `madeira` WHERE id_madeira = $id";
  $buscar = mysqli_query($conexao,$sql);
  while ($array = mysqli_fetch_array($buscar)) {

    $id_madeira = $array['id_madeira'];
    $importador = $array['importador'];
    $conhecimentoaereo = $array['conhecimentoaereo'];
    $origem = $array['origem'];
    $naoconformidade = $array['naoconformidade'];
    $numeronfa = $array['numeronfa'];
    $representante = $array['representante'];
    $datanfa = $array['datanfa']; 
    $cnpj = $array['cnpj'];
    $notificadoReceita = $array['notificadoReceita'];
   ?>
  
  
  <div class="form-group">
    <label>Importador</label>
    <input type="text" class="form-control" name="importador" value="<?php echo $importador ?>">
    <input type="text" class="form-control" name="id" value="<?php echo $id ?>" style="display: none" >
  </div>

  <div class="form-group">
    <label>Ootificado na Receita</label>
    <input type="text" class="form-control" name="notificadoReceita"    value="<?php echo $notificadoReceita ?>" >
  
  </div>
  <div class="form-group">
    <label>Cnpj</label>
    <input type="text" class="form-control" name="cnpj"    value="<?php echo $cnpj ?>" >
  
  </div>
  <div class="form-group">
    <label>Conhecimento Aéreo</label>
    <input type="text" class="form-control" name="conhecimentoaereo" value="<?php echo $conhecimentoaereo ?>">
  
  </div>
  <div class="form-group">
    <label>Origem</label>
    <input type="text" class="form-control" name="origem" value="<?php echo $origem ?>">
  
  </div>
  <div class="form-group">
    <label>Não-conformidade</label>
    <input type="text" class="form-control" name="naoconformidade" value=" <?php echo $naoconformidade ?>"  >
  
  </div>
  <div class="form-group">
    <label>Nº do NFA</label>
    <input type="text" class="form-control" name="numeronfa"  value="<?php echo $numeronfa ?>">
  
  </div>
  



  <div class="form-group">
    <label>Representante </label>
    <input type="text" class="form-control"  name="representante"  value="<?php echo $representante ?>">
  
  </div>


  <div class="form-group">
    <label>Data NFA </label>
    <input type="date" class="form-control"  name="datanfa"  value="<?php echo $datanfa ?>">
  
  </div>

  

  <div style="text-align: right;">
  <button type="submit" id="botao" class="btn btn-primary">Atualizar </button>
</div>


<?php } ?>


</form>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>