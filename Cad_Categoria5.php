<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
include_once './ConexaoBanco.php';
include_once './Seguranca.php';
include_once './TemplateMenu.php';

$descricaoPost = strtoupper(trim(addslashes($_POST["descricao"])));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       
   </head>
    <body>
        ﻿
        <div class="container theme-showcase" role="main">      
            <div class="page-header">
                <h1>Cadastro de Categoria</h1>
                <div class="btn-group btn-group-vertical">
                    <a href='Administrativo.php?link=7'><button type='button' class='btn btn-sm btn-info'>Listar Categorias</button></a>				
                    <a href='Administrativo.php?link=6'><button type='button' class='btn btn-sm btn-info'>Cadastrar Nova Categoria</button></a>				
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
                <form class="form-horizontal" enctype="multipart/form-data">
              <?php
                    $buscarCategoria = "SELECT * FROM categorias WHERE descricao = '$descricaoPost'";
                    $result = $conn->query($buscarCategoria);
                    $count = mysqli_num_rows($result);

                    if ($count > 0) {
                        ?><div class="alert alert-danger">
                            <strong>Atenção!</strong> categoria Já Cadastrada..</div></br>
                        <?php
                        //  echo"<script language='javascript' type='text/javascript'>alert('Atenção essa categoria já existe');window.location.href = '../Administrativo.php?link=6';</script>";
                        //    die();
                        exit;
                    }
                    if (isset($_POST['descricao']) && empty($_POST['descricao'] == false)) {
                        mysqli_query($conn, "INSERT INTO categorias (descricao, created )VALUES ('$descricaoPost', NOW())");
                        ?><div class="alert alert-success">
                            <strong>Categoria <?php echo $descricaoPost; ?> Cadastrada com Sucesso !!.</strong></div></br>

                        <?php
                        //      echo"<script language='javascript' type='text/javascript'>alert('Categoria cadastrada com sucesso!');window.location.href = '../Administrativo.php?link=7'</script>";
                    } else {
                        ?><div class="alert alert-danger">
                            <strong>Atenção!</strong> favor preencher a descrição da Categoria..</div></br>

                        <?php
                    }
                    ?>
                    
                </form>
            </div>

        </div> <!-- /container -->

    </body>
</html>


