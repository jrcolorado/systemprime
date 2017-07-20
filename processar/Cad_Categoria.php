<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';
include_once './TemplateMenu.php';

$descricaoPost = strtoupper(trim(addslashes($_POST["descricao"])));


$buscarCategoria = "SELECT * FROM categorias WHERE descricao = '$descricaoPost'";
$result = $conn->query($buscarCategoria);
$count = mysqli_num_rows($result);

if ($count > 0) {
   echo"<script language='javascript' type='text/javascript'>alert('Atenção essa categoria já existe');window.location.href='../Administrativo.php?link=6';</script>";
 die();
    exit;
}
if (isset($_POST['descricao']) && empty($_POST['descricao'] == false)) {
    mysqli_query($conn, "INSERT INTO categorias (descricao, created )VALUES ('$descricaoPost', NOW())");
    echo"<script language='javascript' type='text/javascript'>alert('Categoria cadastrada com sucesso!');window.location.href='../Administrativo.php?link=7'</script>";
} else {


    echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchido');window.location.href='../Administrativo.php?link=6';</script>";
}
?>


