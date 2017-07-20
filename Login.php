<?php
session_start();
    include_once '../ConexaoBanco.php';
   
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Area de Acesso</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
<?php
    #força a segurança matando as seçoes possiveis quando acessar o login
    unset(     
            $_SESSION['loginUsuario'],
            $_SESSION['nomeUsuario'],
            $_SESSION['idUsuario'],
            $_SESSION['nivelAcessoUsuario'],
            $_SESSION['senhaUsuario']                
            );
?>
    <div class="container">

        <form class="form-signin" method="POST" action="ValidaLogin.php">
            <h2 class="form-signin-heading text-center">Área para Usuários Cadastrados</h2>
            <label for="usuario" class="sr-only">Usuário</label></br>
            <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
            <div class="checkbox">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>
        <p class="text-center text-danger" >
            <?php
                if(isset($_SESSION['loginErro'])){
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                    
                }
            
            ?>  
            
            
        </p>

    </div> <!-- /container -->
    <script src="sj/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
