

<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$id = $_POST["id"];
$descricaoPost = trim(addslashes($_POST["descricao"]));
$descricao = trim(strtoupper($descricaoPost));

$sql = "UPDATE categorias set descricao = '$descricao', modified = NOW() WHERE id='$id'";
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
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=7'>
                                        <script type=\"text/javascript\">
                                        alert(\"Categoria editado com Sucesso.\");
                                        </script>";
        } else {
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=7'>
                                        <script type=\"text/javascript\">
                                        alert(\"categoria não foi editado com Sucesso.\");
                                        </script>";
        }
        ?>
    </body>>
</html>
