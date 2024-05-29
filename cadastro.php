<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
<div class="row">
<div class="col">
<h1>Cadastro</h1>
<form action="cadastro_script.php" method="POST">
<div class="form-group">
    <label for="nome">Nome completo</label>
    <input type="text" class="form-control"  placeholder="Digite seu nome" name="nome">
  </div>
  <div class="form-group">
    <label for="endereco">Endereço completo</label>
    <input type="text" class="form-control"  placeholder="Digite seu endereço" name="endereco">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="text" class="form-control"  placeholder="Digite seu telefone" name="telefone">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control"  placeholder="Digite seu endereço" name="email">
  </div>
  <div class="form-group">
    <label for="nascimento">Data de nascimento</label>
    <input type="date" class="form-control"    name="nascimento">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-success" >
  </div>
</form>
<a href="index.php" class="btn btn-info">Voltar</a>
</div>
</div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>