<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de importadores com prazo de madeira vencida  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    


</head>
<body>
<div class= ".container-fluid" style="margin-top: 30px">
<h3>Listagem madeira prazo 30 dias</h3>
<br>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Importador</th>
      <th scope="col">Cnpj</th>
      <th scope="col">Conhecimento Aéreo</th>
      <th scope="col">Origem</th>
      <th scope="col">Não conformidade</th>
      <th scope="col">Numero NFA</th>
      <th scope="col">Representante</th>
      <th scope="col">Data NFA</th>
      
    </tr>
  </thead>
      <tr>
        <?php




          include 'conexao.php';

          $sql = "SELECT * FROM `madeira` ORDER BY datanfa";
          $buscar = mysqli_query($conexao,$sql);
          
          while ($array = mysqli_fetch_array($buscar)
          ) {
            
            $id_madeira = $array['id_madeira'];
            $importador = $array['importador'];
            $cnpj = $array['cnpj'];
            $conhecimentoaereo = $array['conhecimentoaereo'];
            $origem = $array['origem'];
            $naoconformidade = $array['naoconformidade'];
            $numeronfa = $array['numeronfa'];
            $datanfa = $array['datanfa'];
            $representante = $array['representante'];
            $notificadoReceita = $POST['notificadoReceita'];
          
          
          
          ?>
<tr>
    <td><?php echo $importador?></td>
    <td><?php echo $cnpj?></td>
    <td><?php echo $conhecimentoaereo?></td>
    <td><?php echo $origem?></td>
    <td><?php echo $naoconformidade?></td>
    <td><?php echo $numeronfa?></td>
    <td><?php echo $notificadoReceita?></td>
    <td><?php echo $representante?></td>
    <td><?php echo date("d/m/Y", strtotime($datanfa )) 
    
    
    
    
    
    ?></td>
    

  </tr>
    
        
   
          <?php } ?>
  
  
</table>   



</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<div class="container" style="width:400px">
<center>

<div style="margin-top: 10px">
<a href="menu.php" class="btn btn-danger btn-sm" >Voltar</a>
</div>
</center>

</body>
</html>