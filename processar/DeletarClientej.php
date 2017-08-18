

<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$id = $_POST["id"];

$sql = "DELETE FROM clientes WHERE id='$id'";
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
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=26'>
                                        <script type=\"text/javascript\">
                                        alert(\"Cliente DELETADO com Sucesso.\");
                                        </script>";
        } else {
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=26'>
                                        <script type=\"text/javascript\">
                                        alert(\"Não foi possivel Deletar o Cliente.\");
                                        </script>";
        }
        ?>
    </body>>
</html>
