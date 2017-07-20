

<?php

session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$nome = strtoupper($_POST["nome"]);
$cpf = addslashes($_POST["cpf"]);
$email1 = addslashes($_POST["email1"]);
$email2 = addslashes($_POST["email2"]);
$endereco = strtoupper($_POST["endereco"]);
$numero = addslashes($_POST["numero"]);
$bairro = strtoupper($_POST["bairro"]);
$cidade = strtoupper($_POST["cidade"]);
$estado = strtoupper($_POST["estado"]);
$cep = addslashes($_POST["cep"]);
$telefone = addslashes($_POST["telefone"]);
$celular = addslashes($_POST["celular"]);



$buscarCientes = "SELECT * FROM clientes WHERE cpf = '$cpf'";
$result = $conn->query($buscarCientes);
$count = mysqli_num_rows($result);


if ($count > 0) {

    echo"<script language='javascript' type='text/javascript'>alert('CPF informado está cadastrado...');window.location.href='../Administrativo.php?link=25';</script>";
     
    die();
    exit;    
}
if (isset($_POST['nome']) && empty($_POST['nome']) == false || isset($_POST['cpf']) && empty($_POST['cpf']) == false) {
    $tipo = '1';
    mysqli_query($conn, "INSERT INTO `clientes`(`nome`,`tipo`,`cpf`, `email1`, `email2`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `celular`, `created`) VALUES ('$nome','$tipo','$cpf','$email1','$email2','$endereco','$numero','$bairro','$cidade', '$estado','$cep' ,'$telefone', '$celular',NOW())");
    echo"<script language='javascript' type='text/javascript'>alert('Cliente cadastrado com sucesso!');window.location.href='../Administrativo.php?link=25'</script>";
} else {

    echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchido');window.location.href='../Administrativo.php?link=23';</script>";
}
?>