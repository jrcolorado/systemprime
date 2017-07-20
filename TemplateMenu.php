<?php
        session_start();
        include_once 'Seguranca.php';
        
 
        ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <link rel="icon" href="img/favicon.ico">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
 

  </head>

  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top nav-justified">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                      <li><a href="Administrativo.php?link=1">Home</a></li>
                      <li class="dropdownClientes">
                         <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes<span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="Administrativo.php?link=73">Consultar Pessoa Fisica</a></li>
                              <li><a href="Administrativo.php?link=74">Consultar Pessoa Juridica</a></li>
                              <li><a href="Administrativo.php?link=22">Lista de Clientes</a></li>
                              <li><a href="Administrativo.php?link=25">Listar Pessoa Fisica</a></li>
                              <li><a href="Administrativo.php?link=26">Listar Pessoa Juridica</a></li>
                              <li><a href="Administrativo.php?link=18">Cadastrar Clientes</a></li>
                          </ul>
                      </li>
                      <li class="dropdownProdutos">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Imagens<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="Administrativo.php?link=70">Primeiro estilo</a></li>
                              <li><a href="Administrativo.php?link=71">Segundo estilo</a></li>
                           </ul>
                      </li>
                      
                      <li class="dropdownUsuarios">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="Administrativo.php?link=2">Listar Usuários</a></li>
                              <li><a href="Administrativo.php?link=3">Cadastrar Usuários</a></li>
                          </ul>
                      </li>
                      <li class="dropdownProdutos">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="Administrativo.php?link=7">Listar Categorias</a></li>
                              <li><a href="Administrativo.php?link=13">Listar Produtos</a></li>
                              <li role="separator" class="divider"></li>
                              <li class="dropdown-header"></li>
                              <li><a href="Administrativo.php?link=6">Cadastrar Categorias</a></li>
                              <li><a href="Administrativo.php?link=12">Cadastrar Produtos</a></li>
                          </ul>
                      </li>
                       <li class="dropdownUsuarios">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrativo<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="Administrativo.php?link=98">Usuários logados</a></li>
                              <li><a href="ListarPessoasFisica_1_1.php">Pessoa Fisica</a></li>
                              <li><a href="ListarPessoasJuridica_1_1.php">Pessoa Juridica</a></li>
                              <li><a href="#">Categorias Cadastradas</a></li>
                          </ul>
                      </li>
                      
                      <li><a href="Administrativo.php?link=10">SAIR</a></li>
                  </ul>
                  <div class="navbar-right">
                      <form action="#" class="navbar-form" >
                          <input type="text" value="<?php echo "Usuário: " . $_SESSION['loginUsuario']; ?>" readonly="true" class="form-control">
                      </form>
                  </div><!-- fim di div navbar right -->
              </div><!--/.nav-collapse -->

          </div>
      </nav>
     
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/validator.js"></script>
      <script src="js/docs.min.js"></script>
       <!-- nao gostei desta droga   <script src="js/ckeditor/ckeditor.js"></script> -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
      <script src="js/bootstrap-lightbox.js"></script>
      <script src="js/ie-emulation-modes-warning.js"></script>
      <script src="jquery.js" type="text/javascript"></script>
      <script src="jquery.maskedinput.js" type="text/javascript"></script>

  </body>
</html>
