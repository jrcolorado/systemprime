

<?php

session_start();
include_once './TemplateMenu.php';
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$nomePost = trim(addslashes($_POST["nome"]));
$email = trim(addslashes($_POST["email"]));
$login = trim(addslashes($_POST['login']));
$senha = trim(md5(addslashes($_POST['senha'])));
$nivelAcesso = trim(addslashes($_POST["nivelAcesso"]));

$buscarUsuario = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($buscarUsuario);
$count = mysqli_num_rows($result);

if ($count > 0) {
  
    echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='../Administrativo.php?link=3';</script>";
    die();
    exit;
}
$selecionar = "Selecionar";

if ($_POST['nivelAcesso'] == $selecionar) {
     echo"<script language='javascript' type='text/javascript'>alert('NIvel de acesso nao foi selecionado');window.location.href='../Administrativo.php?link=3';</script>";
    echo $_POST('nivelAcesso');
} 

if (isset($_POST['login']) && empty($_POST['login']) == false || isset($_POST['senha']) && empty($_POST['senha']) == false) {
    $nome = strtoupper($nomePost);
    mysqli_query($conn, "INSERT INTO usuarios (nome,email, login, senha,nivel_acesso_id, created )VALUES ('$nome','$email','$login','$senha', '$nivelAcesso', NOW())");
    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../Administrativo.php?link=2'</script>";

                
} else {

    echo"<script language='javascript' type='text/javascript'>alert('Erro nos dados a serem preenchido');window.location.href='../Administrativo.php?link=3';</script>";
}
 
?>