<?php
session_start();
include_once './ConexaoBanco.php';
include_once './TemplateMenu.php';
//include_once './Seguranca.php';
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
            

              <div class="alert alert-danger">
                <strong>Atenção!</strong> categoria Já Cadastrada..</div></br>
            
             <div class="row espaco">
		<div class="btn-group btn-group-vertical">
                    <td><a href='Administrativo.php?link=6'><button type='button' class='btn btn-sm btn-info'>Cadastrar Categoria</button></a></td>			
                    <td> <a href='Administrativo.php?link=7'><button type='button' class='btn btn-sm btn-info'>listar Categorias</button></a></td>				
		</div>

        </div> <!-- /container -->
        

    </body>
</html>

