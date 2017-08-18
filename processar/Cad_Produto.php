

<?php

session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$nome = strtoupper($_POST["nome"]);
$descricao_curta = strtoupper($_POST["descricao_curta"]);
$descricao_longa = strtoupper($_POST["descricao_longa"]);
$preco = addslashes($_POST["preco"]);
$tag = strtoupper($_POST["tag"]);
$description = strtoupper($_POST["description"]);
$arquivo = addslashes($_POST["arquivo"]);
$situacao_id = addslashes($_POST["situacao_id"]);
$categoria_id = addslashes($_POST["categoria_id"]);

$buscarUsuario = "SELECT * FROM produtos WHERE nome = '$nome'";
$result = $conn->query($buscarUsuario);
$count = mysqli_num_rows($result);

if ($count > 0) {
    echo"<script language='javascript' type='text/javascript'>alert('Esse Produto já existe');window.location.href='../Administrativo.php?link=13';</script>";
    die();
    exit;
}
if (isset($_POST['nome']) && empty($_POST['nome']) == false || isset($_POST['situacao_id']) && empty($_POST['situacao_id']) == false || isset($_POST['categoria_id']) && empty($_POST['categoria_id']) == false) {

    mysqli_query($conn, "INSERT INTO produtos (nome,descricao_curta,descricao_longa,preco,tag,description, imagem, situacao_id, categoria_id, created )VALUES ('$nome','$descricao_curta','$descricao_longa','$preco', '$tag','$description','$arquivo','$situacao_id', '$categoria_id', NOW())");
    echo"<script language='javascript' type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location.href='../Administrativo.php?link=13'</script>";
} else {

    echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchido');window.location.href='../Administrativo.php?link=13';</script>";
}
?>