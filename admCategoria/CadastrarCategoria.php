<?php
session_start();
include_once '../ConexaoBanco.php';
include_once '../Seguranca.php';
include_once './TemplateMenu.php';

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


        <div class="container theme-showcase" role="main">      
            <div class="page-header">
                <h1>Cadastrar Categoria</h1>
            </div>
            <div class="row espaco">
                <div class="pull-right">
                    <a href='Administrativo.php?link=7'><button type='button' class='btn btn-sm btn-info'>Listar categorias</button></a>				
                </div>
            </div></br>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" data-toggle="validator" method="POST" action="Cad_Categoria5.php">

                        <div class="form-group">
                            <label for="inputCategoria" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="descricao" placeholder="Descrição da Categoria"   
                                       data-error="Por favor, Digite a descrição." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- /container -->

    </body>
</html>
