

<?php

session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$razao_Social = trim(strtoupper($_POST["razao_social"]));
$nome_fantasia = trim(strtoupper($_POST["nome_fantasia"]));
$cnpj = trim(addslashes($_POST["cnpj"]));
$email1 = trim(addslashes($_POST["email1"]));
$email2 = trim(addslashes($_POST["email2"]));
$endereco = trim(strtoupper($_POST["endereco"]));
$numero = trim(addslashes($_POST["numero"]));
$bairro = trim(strtoupper($_POST["bairro"]));
$cidade = trim(strtoupper($_POST["cidade"]));
$estado = trim(strtoupper($_POST["estado"]));
$cep = trim(addslashes($_POST["cep"]));
$telefone = trim(addslashes($_POST["telefone"]));
$celular = trim(addslashes($_POST["celular"]));



$buscarCientes = "SELECT * FROM clientes WHERE cnpj = '$cnpj'";
$result = $conn->query($buscarCientes);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo"<script language='javascript' type='text/javascript'>alert('Esse Cliente já existe');window.location.href='../Administrativo.php?link=26';</script>";
    die();
    exit;
}
if (isset($_POST['razao_social']) && empty($_POST['razao_social']) == false || isset($_POST['cnpj']) && empty($_POST['cnpj']) == false) {
    $tipo = '0';
    mysqli_query($conn, "INSERT INTO `clientes`(`razao_social`,`nome_fantasia`,`tipo`,`cnpj`, `email1`, `email2`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `celular`, `created`) VALUES ('$razao_Social','$nome_fantasia','$tipo','$cnpj','$email1','$email2','$endereco','$numero','$bairro','$cidade', '$estado','$cep' ,'$telefone', '$celular',NOW())");
    echo"<script language='javascript' type='text/javascript'>alert('Cliente cadastrado com sucesso!');window.location.href='../Administrativo.php?link=26'</script>";
} else {

    echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchido');window.location.href='../Administrativo.php?link=26';</script>";
}
?>