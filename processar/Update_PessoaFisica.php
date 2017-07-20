

<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$id = $_POST["id"];
$nome = trim(strtoupper($_POST["nome"]));
$cpf = trim(addslashes($_POST["cpf"]));
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

$sql = "UPDATE clientes SET nome = '$nome', cpf = '$cpf', email1 = '$email1', email2 = '$email2', endereco = '$endereco', numero = '$numero', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cep = '$cep', telefone = '$telefone', celular = $celular, modified = NOW() WHERE id='$id' ";
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
        if ($result == true) {
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=25'>
                                        <script type=\"text/javascript\">
                                        alert(\"Cliente editado com Sucesso.\");
                                        </script>";
        } else {
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=25'>
                                        <script type=\"text/javascript\">
                                        alert(\"Cliente não foi editado com Sucesso.\");
                                        </script>";
        }
        ?>
    </body>>
</html>
