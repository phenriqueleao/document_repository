<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/theme.css" type="text/css">
</head>

<body>
<nav class="navbar bg-primary navbar-dark">
    <div class="container"> <a class="navbar-brand" href="cadastrarGrupo.php">
        <i class="fa d-inline fa-lg fa-circle"></i>
        <b> GestãoDS&nbsp;</b>
        <small> | &nbsp; <i class="fa fa-folder-open-o" aria-hidden="true"></i> Repositório de Documentos</small>
      </a> </div>
  </nav>
  <nav class="navbar navbar-light">
  <?php 
        session_start();

        echo '
        <div class="container"> <a class="navbar-brand text-primary" href="#">
        <p class="navbar-brand text-primary"> Bem vindo, '.$_SESSION['nomeUsuario'].'</p>
        </a>
        <a class="btn btn-outline-danger" href="../control/controleUsuario.php?botao=sair">Sair</a>
        </div>
        ';
    ?>
  </nav>
  <form action="../control/controleGrupo.php" method="POST">
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-4 col-10">
          <h1>Cadastrar Time</h1>
          <label for="form16" class="float-left">Nome</label>
          <div class="form-group"> <input type="text" class="form-control" id="nomeInput" name="nomeInput" placeholder="Ex: Marketing"> </div>          <div class="form-group">
          </div>
          <a class="btn btn-info" href="pageAdmin.php">Voltar</a>
          <button type="submit" name="botao" value="cadastrar" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2019 GestãoDS</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>