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
$nome = trim($_POST[nome]);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container theme-showcase" role="main">

        <div class="page-header"></br>
        <h1>Lista das Pessoas Fisicas</h1>
          <div class="row espaco">
		<div class="pull-right">
			<a href='Administrativo.php?link=73'><button type='button' class='btn btn-sm btn-info'>Voltar a pesquisa</button></a>				
		</div>
	</div></br>
      </div>
	           
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th> 
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Celular</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM clientes where nome LIKE '%".$nome."%' and tipo = '1' ORDER BY nome ASC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['nome'] . '</td>';
                                    echo '<td>' . $row['cpf'] . '</td>';
                                    echo '<td>' . $row['email1'] . '</td>';
                                    echo '<td>' . $row['celular'] . '</td>';
                                    ?>
                                    <td> <a href='Administrativo.php?link=27&id=<?php echo $row['id'] ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a></td>
                                    <td> <a href='Administrativo.php?link=28&id=<?php echo $row['id'] ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
                                    <td> <a href='Administrativo.php?link=29&id=<?php echo $row['id'] ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
                                    <?php
                                }
                            } else {
                                ?>
                        <div class="alert alert-danger">
                                <strong>Desculpa!</strong> Não exsite Cliente cadastrado como: <?php echo strtoupper($nome)?>.
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
