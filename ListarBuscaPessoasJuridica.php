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
      $pesq_coluna = trim($_POST['opcaoPesquisa']);
      $pesq_descricao = trim($_POST['descPesquisa']);
   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
               
        <div class="container theme-showcase" role="main">

      <div class="page-header"></br>
        <h1>Clientes Pessoa Juridica</h1>
         <div class="row espaco">
		<div class="pull-right">
			<a href='Administrativo.php?link=74'><button type='button' class='btn btn-sm btn-info'>Voltar a pesquisa</button></a>				
		</div>
	</div></br>
       
      </div>
        <div class="col-md-12">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Razão Social</th> 
                <th>CNPJ</th>
                <th>E-mail</th>
                <th>Cidade</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                
                        $sql = "SELECT * FROM clientes where $pesq_coluna LIKE '%".$pesq_descricao."%' and tipo = '0' ORDER BY razao_social ASC";
                        $result = $conn->query($sql);
                        
                        if($pesq_coluna == "Selecione"){
                            ?>
                <div class="row espaco">
                        <div class="pull-right">
    			<a href='Administrativo.php?link=74'><button type='button' class='btn btn-sm btn-info'>Retornar a pesquisa</button></a>				
                            </div>
                    </div></br>
                <div class="alert alert-danger">
                        <strong> Atencão é obrigatório escolher uma Opção para pesquisa</strong>
                    </div>
                <?php
                exit();
               
                        }

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                                           echo '<td>'.$row['razao_social'].'</td>';
                                           echo '<td>'.$row['cnpj'].'</td>';
                                           echo '<td>'.$row['email1'].'</td>';
                                           echo '<td>'.$row['cidade'].'</td>';
                                                ?>
                                                <td> <a href='Administrativo.php?link=30&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a></td>
                                                <td> <a href='Administrativo.php?link=31&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
                                                <td> <a href='Administrativo.php?link=32&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
                                                <?php
                            }
                        } else {
                            ?>
                         <div class="row espaco">
                        <div class="pull-right">
    			<a href='Administrativo.php?link=74'><button type='button' class='btn btn-sm btn-info'>Retornar a pesquisa</button></a>				
                            </div>
                    </div></br>
                                                
                        <div class="alert alert-danger">
                                <strong> Não exsitem clientes cadastrados na pesuisa de <?php echo $pesq_coluna." como: ".$pesq_descricao;?>.</strong>
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
