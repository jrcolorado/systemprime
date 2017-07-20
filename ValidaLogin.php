<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
            <title></title>
              <script type ="text/javascript"></script>
    </head>
    <body>
        <?php 
        include_once './ConexaoBanco.php';
        
        session_start();
        
    $login = $_POST['usuario'];
    $senha = md5($_POST['senha']);
    #$senha = $_POST['senha']; #TEM QUE CADASTRAR A SENHA EM MD5
    $buscarUsuario = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";

    $result = $conn->query($buscarUsuario);    
     
        if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
            $_SESSION['loginUsuario']=$row['login'];
            $_SESSION['nomeUsuario']=$row['nome'];
            $_SESSION['idUsuario']=$row['id'];
            $_SESSION['nivelAcessoUsuario']=$row['nivel_acesso_id'];
            $_SESSION['senhaUsuario']=$row['senha'];
       
            if($_SESSION['nivelAcessoUsuario'] == 1){
            header("Location: Home.php"); 
            }
         if($_SESSION['nivelAcessoUsuario'] == 2){
              header("Location:Home.php");  
            }
        }
        } else {
        $_SESSION['loginErro']= "Usuário ou senha Inválidos..";
        header("Location:Administrativo.php?link=99");
        }
        
        
        
        $conn->close();

   ?>
    </body>
</html>
