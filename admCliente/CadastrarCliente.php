<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
    include_once './ConexaoBanco.php';
    include_once './TemplateMenu.php';
   # include_once './Seguranca.php'; 

        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
   <div class="page-header"></br>
       <h1>Cadastro de Cliente</h1>
      <!--  <h1>Cadastro de Cliente</h1>
        <td> <a href='Administrativo.php?link=24'><button type='button' class='btn btn-sm btn-primary'>Pessoa Juridica</button></a></td>
        <td> <a href='Administrativo.php?link=23'><button type='button' class='btn btn-sm btn-primary'>Pessoa Fisica</button></a></td>       
    -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdownClientes">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipo de Cliente<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="Administrativo.php?link=23">Pessoa Fisica</a></li>
                        <li class="active"><a href="Administrativo.php?link=24">Pessoa Juridica</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
        
    </div>
    </div>
        
    </body>
</html>
