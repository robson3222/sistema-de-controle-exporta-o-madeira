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





    
<div class="container" id="tamanhoContainer" style= "margin-top: 48px">
<form action="_inserir_madprazo.php" method="POST" style="margin-top: 20px">
  
<div class="form-group">
    <label>Notificado na Receita </label>
    <input type="text" class="form-control"  name="notificadoReceita"  placeholder="foi notificado na receita?" >
  
  </div>
  
  <div class="form-group">
    <label>Importador</label>
    <input type="text" class="form-control" name="importador" placeholder="Digite o nome do importador" >
  
  </div>
  <div class="form-group">
    <label>Cnpj</label>
    <input type="text" class="form-control" name="cnpj" placeholder="Digite o Nº do cnpj"  >
  
  </div>
  <div class="form-group">
    <label>Conhecimento Aéreo</label>
    <input type="text" class="form-control" name="conhecimentoaereo" placeholder="Digite o nº do conhecimento aéreo" autocomplete="off">
  
  </div>
  <div class="form-group">
    <label>Origem</label>
    <input type="text" class="form-control" name="origem"  placeholder="Digite o nome da origem" >
  
  </div>
  <div class="form-group">
    <label>Não-conformidade</label>
    <input type="text" class="form-control" name="naoconformidade"   placeholder="Digite a não conformidade"  >
  
  </div>
  <div class="form-group">
    <label>Nº do NFA</label>
    <input type="text" class="form-control" name="numeronfa"  placeholder="Digite o numero do nfa" autocomplete="off">
  

  <div class="form-group">
    <label>Representante </label>
    <input type="text" class="form-control"  name="representante"  placeholder="Digite o Representante " >
  
  </div>

  <div class="form-group">
    <label>Data NFA </label>
    <input type="date" class="form-control"  name="datanfa"  placeholder="Digite a data da NFA" autocomplete="off">
  
  </div>

  <div style="text-align: lelft">
  <button type="submit" id="botao" class="btn btn-primary">Gravar</button>
</div>
</form>
</div>










<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>