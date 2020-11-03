<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class= "container" style="margin-top: 2px">
<div class="card">
<div class="card-body">
<div class="row">
  <div class="col-sm-6">

<h3> Bem vindo, ao Sistema Controle de Madeira.
</div>
<div  class=" container" id="data-hora"  style="text-align:lelft; margin-top: 2px">
	
    <script>
			// Função para formatar 1 em 01
			const zeroFill = n => {
				return ('0' + n).slice(-2);
			}

			// Cria intervalo
			const interval = setInterval(() => {
				// Pega o horário atual
				const now = new Date();

				// Formata a data conforme dd/mm/aaaa hh:ii:ss
				const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());

				// Exibe na tela usando a div#data-hora
				document.getElementById('data-hora').innerHTML = dataHora;
			}, 1000);
		</script>
</div>
</div>
</div>
</div>
</div>

<div class="container" style="margin-top: 10px">

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Adicionar Empresa</h5>
        <p class="card-text">Opção para cadastrar empresa com prazo madeira vencida.</p>
        <a href="adicionar_mad.php" class="btn btn-primary">Cadastrar Empresa</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lista de Empresas</h5>
        <p class="card-text">Visualizar, editar e excluir empresas.</p>
        <a href="_listar_madeira.php" class="btn btn-primary">Lista de empresas</a>
      </div>
    </div>
  </div>
</div>
<div class="row" style="margin-top: 10px">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Imprimir</h5>
        <p class="card-text">Imprimir.</p>
        <a href="imprimirpdf.php" class="btn btn-primary">Imprimir</a>
      </div>
    </div>
  </div>


 
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pesquisar importador</h5>
        <p class="card-text">Pesquisar pelo nome do importador</p>
        <a href="pesquisar.php" class="btn btn-primary">Pesquisar</a>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container" style="margin-top: 10px">
<div class="row" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pesquisar  NFA</h5>
        <p class="card-text">Pesquisar pelo nº da NFA.</p>
        <a href="pesquisardat.php" class="btn btn-primary">Pesquisar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Pesquisar Representante</h5>
        <p class="card-text">Pesquisar pelo nome do Representante</p>
        <a href="nomedespachante.php" class="btn btn-primary">Pesquisar</a>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 10px">
<div class="row" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Aprovar Usuarios</h5>
        <p class="card-text">Aprovar usuarios cadastrados</p>
        <a href="_aprovar_usuario.php" class="btn btn-primary">Aprovar </a>
      </div>
    </div>
  </div>

</div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>