<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de importadores com prazo de madeira vencida  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    


</head>
<body>

<div class="container"  style="width: 400px; margin-top: 40px">
<div style="text-align:right">
<a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
</div>
<h4>Cadastro usuario</h4>
<form action="_insert_usuario_externo.php" method="post">

<div class="form-grup">
<label>Nome do Usuario</label>
<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
</div>

<div class="form-grup">
<label>E-mail</label>
<input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="E-mail">
</div>

<div class="form-grup">
<label>Senha do Usuario</label>
<input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
</div>

<div class="form-grup">
<label>Repetir Senha</label>
<input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir senha" oninput="validaSenha(this)">
    <small>Precisa ser igual a senha digitada acima.</small>
</div>


<div style="text-align: right">
<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</div>

</form>


</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>





<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>

</body>
</html>