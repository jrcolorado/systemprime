

<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';

$id = $_POST["id"];
$nome = trim(strtoupper($_POST["nome"]));
$descricao_curta = trim(strtoupper($_POST["descricao_curta"]));
$descricao_longa = trim(strtoupper($_POST["descricao_longa"]));
$preco = trim(addslashes($_POST["preco"]));


$sql = "UPDATE produtos set nome ='$nome',descricao_curta = '$descricao_curta',descricao_longa = '$descricao_longa', preco = '$preco',  modified = NOW() WHERE id='$id'";
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
                                        alert(\"Produto Alterado com Sucesso.\");
                                        </script>";
        } else {
            echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../Administrativo.php?link=13'>
                                        <script type=\"text/javascript\">
                                        alert(\"Não foi possivel editar o produto.\");
                                        </script>";
        }
        ?>
    </body>>
</html>
