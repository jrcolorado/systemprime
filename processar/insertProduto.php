

<?php
    session_start();
    include_once '../ConexaoBanco.php';
    include_once '../Seguranca.php'; 

    $nome   = addslashes($_POST["nome"]);  
    $email  = addslashes($_POST["email"]);
    $login = addslashes($_POST['login']);
    $senha = md5(addslashes($_POST['senha']));
    $nivelAcesso = addslashes($_POST["nivelAcesso"]);
    
     $buscarUsuario = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($buscarUsuario);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='../Administrativo.php?link=3';</script>";
        die();
        exit;
    }
    if(isset($_POST['login']) && empty($_POST['login']) == false || isset($_POST['senha']) && empty($_POST['senha']) == false ){
        $nome   = addslashes($_POST["nome"]);  
        $email  = addslashes($_POST["email"]);
        $login = addslashes($_POST['login']);
	$senha = md5(addslashes($_POST['senha']));
        $nivelAcesso = addslashes($_POST["nivelAcesso"]);
        
        mysqli_query($conn,"INSERT INTO usuarios (nome,email, login, senha,nivel_acesso_id, created )VALUES ('$nome','$email','$login','$senha', '$nivelAcesso', NOW())");
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../Administrativo.php?link=2'</script>";   
            
    }else{
           
        echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchido');window.location.href='../Administrativo.php?link=3';</script>";
       }
    
        ?>