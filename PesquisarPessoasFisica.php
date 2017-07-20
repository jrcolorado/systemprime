<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
      include_once './TemplateMenu.php';
      include_once './Seguranca.php';
      include_once './ConexaoBanco.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
               
        <div class="container theme-showcase" role="main">

      <div class="page-header">
                <h1>Pesquisar Pessoa Fisica</h1>
            </div>
        
        <form class="form-horizontal" data-toggle="validator" method="POST" action="ListarBuscaPessoasFisica.php">

                <div class="form-group">
            <label for="inputnome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nome" placeholder="Descrição do nome "   
                       data-error="Por favor, Digite o nome da pessoa." required >
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-4">
                    <button type="submit" class="btn btn-success">Pesquisar</button>
                </div>
            </div>
        </div>

              
            </form>
        
        
         
      </div>
       
      </body>
</html>
