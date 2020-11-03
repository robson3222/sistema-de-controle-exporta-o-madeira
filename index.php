<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable-no">
    <title>Tela de login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style type="text/css">
#tamanho {
  width:350px;
  -webkit-box-shadow: 10px 10px 58px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 58px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 58px 0px rgba(0,0,0,0.75);


}
</style>

</head>
<body>
    
<div class="container" id="tamanho" style="margin-top: 100px; border-radius:15px; border:2px solid #f3f3f3">
<div style="padding:10px">
<center>
<img src="imagem/cadeado.png" width="125px" heigth="125px">
</center>
<form>
  <div class="form-group">
  <label> Usuario</label>
  <input type="text" name="usuario" class="form-control" placeholder="Usuario" autocomplete="off" required>
</div>

<form>
  <div class="form-group">
  <label> Senha</label>
  <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
  </div>
</form>
<div style="text-align: right";>
<button type="submit" class="btn btn-sm btn-success">Entrar</button>
</div>





</div>

</div>

<center>
<p> Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a></p>
</center>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>