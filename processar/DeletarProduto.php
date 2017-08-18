

<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$id = $_POST["id"];

$sql = "DELETE FROM produtos WHERE id='$id'";
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
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=13'>
                                        <script type=\"text/javascript\">
                                        alert(\"Produto DELETADO com Sucesso.\");
                                        </script>";
        } else {
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=13'>
                                        <script type=\"text/javascript\">
                                        alert(\"Não foi possivel Deletar Produto.\");
                                        </script>";
        }
        ?>
    </body>>
</html>
