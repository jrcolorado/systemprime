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

      <div class="page-header"></br>
        <h1>Listar Clientes</h1>
        
      <!--  
        <div class="btn-group btn-group">
            <a href="Administrativo.php?link=26" class="btn btn-primary">Listar Pessoas Juridica</a>
            <a href="Administrativo.php?link=25" class="btn btn-primary">Listar Pessoas Fisica</a>
        </div> 
          -->           
        </br></br>
        
        <div class="btn-group btn-group-vertical">
            <a href="Administrativo.php?link=26" class="btn btn-primary">Listar Pessoas Juridica</a>
            <a href="Administrativo.php?link=25" class="btn btn-primary">Listar Pessoas Fisica</a>
        </div> 
        
        </br></br>
                     
        <!--
        <td> <a href='Administrativo.php?link=26'><button type='button' class='btn btn-primary'>Listar Pessoas Juridica</button></a></td>
        <td> <a href='Administrativo.php?link=25'><button type='button' class='btn btn-primary'>Listar Pessoas Fisica</button></a></td>       
   -->
         </br>
      </div>
        
      </div>
    </body>
</html>
