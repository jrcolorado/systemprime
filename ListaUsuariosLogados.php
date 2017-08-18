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
        <h1>Usuários Logados</h1>
      </div>
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
               <th>Usuário</th>
               <th>IP</th>
                <th>Logado em</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                        $sql = "SELECT * FROM usuarios_session where status = '0'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                                                echo '<td>'.$row['usuario'].'</td>';
                                                echo '<td>'.$row['ip'].'</td>';
                                                 echo '<td>'.$row['session_new'].'</td>';
                                                ?>
                  
 
                                                <?php
                            }
                        } else {?>
                        <div class="alert alert-info">
                                <strong>Informação!</strong> Não exsitem usuarios logados.
                            </div>
                <?php
                        }
                        $conn->close();              
                ?>
              </tr>
             </tbody>
          </table>
        </div>
      </div>
    </body>
</html>
