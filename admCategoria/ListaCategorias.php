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
        <h1>Lista das Categorias</h1>
      </div>
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
               <th>Descrição da Categoria</th>
               <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                        $sql = "SELECT * FROM categorias ";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                                                echo '<td>'.$row['descricao'].'</td>';?>
                                                <td> <a href='Administrativo.php?link=9&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
                                                <?php
                            }
                        } else {
                            echo "0 results";
                            echo "</br></br><a href=Logout.php>SAIR..</a>"; 
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
