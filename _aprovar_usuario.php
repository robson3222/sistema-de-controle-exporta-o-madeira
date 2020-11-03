<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar usuario  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    


</head>
<body>
<div class= "container" style="margin-top: 40px">
<div>
<h3>Aprovar usuario</h3>
<br>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Nome </th>
      <th scope="col">Email </th>
      <th scope="col">Nivel </th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
        <?php




          include 'conexao.php';

          $sql = "SELECT * FROM usuarios WHERE status = 'Inativo' ";
          $buscar = mysqli_query($conexao,$sql);
          
          while ($array = mysqli_fetch_array($buscar)
          ) {
            
            $id_usuario = $array['id_usuario'];
            $nomeusuario = $array['nome_usuario'];
            $mail = $array['mail_usuario'];
           $nivel = $array['nivel_usuario'];
          
          
          
          ?>
<tr>
    <td><?php echo $nomeusuario?></td>
    <td><?php echo $mail ?></td>
    <td><?php echo $nivel ?> </td>
    
  <td><a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>
  &nivel=<?php echo $nivel ?>" role="button"><i class ="far fa-edit"></i>$nbsp;Aprovar</a>
  
  <a class="btn btn-danger btn-sm" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>
  &nivel=<?php echo $nivel?>" role="button"><i class ="far fa-edit"></i>$nbsp;Excluir</a>
  
    
       </td> 
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