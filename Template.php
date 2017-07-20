<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    </head>
  <body>
   
      <?php


$descricaoPost = trim(addslashes($_POST["descricao"]));


$buscarCategoria = "SELECT * FROM categorias WHERE descricao = '$descricao'";
$result = $conn->query($buscarCategoria);
$count = mysqli_num_rows($result);

if ($count > 0) {
    
    echo"<script language='javascript' type='text/javascript'>alert('Atenção essa categoria já existe');window.location.href='../Administrativo.php?link=3';</script>";
    die();
    exit;
}
if (isset($_POST['descricao']) && empty($_POST['descricao'] == false)) {
    $descricao = strtoupper($descricaoPost);


    mysqli_query($conn, "INSERT INTO categorias (descricao, created )VALUES ('$descricao', NOW())");
    echo"<script language='javascript' type='text/javascript'>alert('Categoria cadastrada com sucesso!');window.location.href='../Administrativo.php?link=7'</script>";
} else {


    echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchido');window.location.href='../Administrativo.php?link=6';</script>";
}
?>



      

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="js/jquery.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/validator.js"></script>
      <script src="js/docs.min.js"></script>
       <!-- nao gostei desta droga   <script src="js/ckeditor/ckeditor.js"></script> -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
      <script src="js/bootstrap-lightbox.js"></script>
      
      
  </body>
</html>
