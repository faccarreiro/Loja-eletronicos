<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lojas Carreiro</title>
  </head>
  <body>
    <h1><center>Lojas Carreiro<center></h1>
    <img src="imagens/images.jpg" class="container-fluid"></br>



<ul class="nav justify-content-center">
  
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pc.php">PC Gamer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="notebook.php">Notebook Gamer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="tv.php">Smart TV</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="celular.php">Celulares</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cadastro.php">Cadastro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
  </li>
  
</ul>



<br/>

<form method="POST" action="cad.php">
<div class="container">
  
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="Seu Nome">
  </div>
  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="number" class="form-control" name="cpf" placeholder="CPF">
  </div>
  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" name="endereco" placeholder="Endereço">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="number" class="form-control" name="telefone" placeholder="Telefone">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" name="senha" placeholder="Senha">
  </div>
  
  <button class="btn btn-primary" type="submit">Envia</button>
</form>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>