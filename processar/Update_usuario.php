

<?php
    session_start();
    include_once '../ConexaoBanco.php';
    include_once '../Seguranca.php'; 
   
$id = $_POST["id"];
$nomePost   = trim(addslashes($_POST["nome"]));  
$nome   = trim(strtoupper($nomePost));
$email  = trim(addslashes($_POST["email"]));
$login = trim(addslashes($_POST['login']));
$nivelAcesso = trim(addslashes($_POST["nivelAcesso"]));
                
$sql = "UPDATE usuarios set nome ='$nome', email = '$email', login = '$login', nivel_acesso_id = '$nivelAcesso', modified = NOW() WHERE id='$id'";
$result = $conn->query($sql);     
mysqli_close($conn);
 
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
<?php
		
         if($result == true ){
                        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=2'>
                                        <script type=\"text/javascript\">
                                        alert(\"Usuário editado com Sucesso.\");
                                        </script>";
                }else{
                        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=2'>
                                        <script type=\"text/javascript\">
                                        alert(\"Usuário não foi editado com Sucesso.\");
                                        </script>";
                }

?>
        </body>>
</html>
     