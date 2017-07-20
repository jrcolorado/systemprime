<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
include_once './ConexaoBanco.php';
include_once './Seguranca.php';
include_once './TemplateMenu.php';

$nomePost = trim(addslashes($_POST["nome"]));
$email = trim(addslashes($_POST["email"]));
$login = trim(addslashes($_POST['login']));
$senha = trim(md5(addslashes($_POST['senha'])));
$nivelAcesso = trim(addslashes($_POST["nivelAcesso"]));

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
   </head>
    <body>
        ﻿
        <div class="container theme-showcase" role="main">      
            <div class="page-header">
                <h1>Cadastro de Usuário</h1>
                <div class="btn-group btn-group-vertical">
                    <a href='Administrativo.php?link=2'><button type='button' class='btn btn-sm btn-info'>Listar Usuário</button></a>				
                    <a href='Administrativo.php?link=3'><button type='button' class='btn btn-sm btn-info'>Cadastrar Novo Usuário</button></a>				
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
                <form class="form-horizontal" enctype="multipart/form-data">
              
<?php


$buscarUsuario = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($buscarUsuario);
$count = mysqli_num_rows($result);

if ($count > 0) {
  ?><div class="alert alert-danger">
                            <strong>Atenção!</strong> Este Login já existe..</div></br>
                        <?php
   // echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='../Administrativo.php?link=3';</script>";
  //  die();
    exit();
}
$selecionar = "Selecionar";

if ($_POST['nivelAcesso'] == $selecionar) {
    ?><div class="alert alert-danger">
                            <strong>Nivel de Acesso não foi selecionado</strong></div></br>
                        <?php
    exit();
   // echo"<script language='javascript' type='text/javascript'>alert('NIvel de acesso nao foi selecionado');window.location.href='../Administrativo.php?link=3';</script>";
   // echo $_POST('nivelAcesso');
} 

if (isset($_POST['login']) && empty($_POST['login']) == false || isset($_POST['senha']) && empty($_POST['senha']) == false) {
    $nome = strtoupper($nomePost);
    mysqli_query($conn, "INSERT INTO usuarios (nome,email, login, senha,nivel_acesso_id, created )VALUES ('$nome','$email','$login','$senha', '$nivelAcesso', NOW())");
   // echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../Administrativo.php?link=2'</script>";
?><div class="alert alert-success">
                            <strong>Usuário, <?php echo $nomePost; ?> Cadastrado com Sucesso!</strong> </div></br>
                        <?php
      exit();
                
} else {
?><div class="alert alert-danger">
                            <strong>Erro nos dados aserem preenchidos</strong></div></br>
                        <?php
    exit();    
//echo"<script language='javascript' type='text/javascript'>alert('Erro nos dados a serem preenchido');window.location.href='../Administrativo.php?link=3';</script>";
}
 
?>
                </form>
            </div>

        </div> <!-- /container -->

    </body>
</html>


