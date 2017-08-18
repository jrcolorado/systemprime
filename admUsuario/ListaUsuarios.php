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
        <h1>Lista dos Usuários</h1>
          <div class="row espaco">
		<div class="pull-right">
			<a href='Administrativo.php?link=3'><button type='button' class='btn btn-sm btn-info'>Cadastrar Novo Usuário</button></a>				
		</div>
	</div></br>
      </div>
        <div class="col-md-12 list-group-item">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th><center>Nivel de Acesso</center></th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                        $sql = "SELECT * FROM usuarios ORDER BY nome ASC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                                                echo '<td>'.$row['id'].'</td>';
                                                echo '<td>'.$row['nome'].'</td>';
                                                echo '<td>'.$row['email'].'</td>';
                                                echo '<td><center>'.$row['nivel_acesso_id'].'</td></center>';?>
                                                <td> <a href='Administrativo.php?link=5&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a></td>
                                                <td> <a href='Administrativo.php?link=4&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
                                                <td> <a href='Administrativo.php?link=11&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
                                                <?php
                            }
                        } else {
                            ?><div class="alert alert-danger">
                <strong>Desculpa !</strong> Não tem Usuários cadastrados <?php echo strtoupper($nome)?>.
            </div><?php
                        }
                        $conn->close();              
                ?>
              </tr>
             </tbody>
          </table>
       
      </div>
        </div>>
    </body>
</html>
