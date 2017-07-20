<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        ob_start();
        if(($_SESSION['loginUsuario']== "") ||       
            ($_SESSION['nomeUsuario']== "") ||
            ($_SESSION['idUsuario']== "")||
            ($_SESSION['nivelAcessoUsuario']== "")||
            ($_SESSION['senhaUsuario']== "")){
            
            unset(     
            $_SESSION['loginUsuario'],
            $_SESSION['nomeUsuario'],
            $_SESSION['idUsuario'],
            $_SESSION['nivelAcessoUsuario'],
            $_SESSION['senhaUsuario']                
            );
            
            $_SESSION['loginErro']= "Área restrita para Usuário Cadastrado.";
            header("Location: Login.php");
        }
        
        ?>
    </body>
</html>
