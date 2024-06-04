    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Pesquisa</title>
      </head>
      <body>
        <?php
    $pesquisa=$_POST['busca'] ??'';
    include "conexao.php";
    $sql="SELECT * FROM pessoas WHERE nome LIKE'%$pesquisa%'";
    $dados=mysqli_query($conn,$sql);
    ?>

        <div class="container">
    <div class="row">
    <div class="col">
    <h1>Pesquisar</h1>
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline" action="pesquisa.php" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="busca" autofocus>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </nav>
   
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Endereço</th>
          <th scope="col">Telefone</th>
          <th scope="col">Email</th>
          <th scope="col">Data de nascimento</th>
          <th scope="col">Funções</th>

        </tr>
      </thead>
      <tbody>

      <?php
    while($linha=mysqli_fetch_assoc($dados)){
    $id=$linha['id'];
    $nome=$linha['nome'];
    $endereco=$linha['endereco'];
    $telefone=$linha['telefone'];
    $email=$linha['email'];
    $nascimento=$linha['nascimento'];
$nascimento=mostra_data($nascimento);
    echo "<tr>
    <th scope='row'>$nome</th>
    <td>$endereco</td>
    <td>$telefone</td>
    <td>$email</td>
    <td>$nascimento</td>
    <td><a href='#' class='btn btn-success btn-sm'>Editar</a>
    <a href='#' class='btn btn-danger btn-sm'>Excluir</a>
    </td>

    
    </tr>";

    }
        ?>
        
        
      </tbody>
    </table>

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