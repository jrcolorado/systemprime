<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
    //Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
    include_once("conexao.php");
      include_once './TemplateMenu.php';
      include_once './Seguranca.php';
      include_once './ConexaoBanco.php';
?>
<?php 



//Selecionar todos os cursos da tabela
$result_curso = "SELECT * FROM categorias";
$resultado_curso = mysqli_query($conn, $result_curso);

//Contar o total de cursos
$total_cursos = mysqli_num_rows($resultado_curso);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_cursos/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result_cursos = "SELECT * FROM categorias limit $incio, $quantidade_pg";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$total_cursos = mysqli_num_rows($resultado_cursos);
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
                     $result_cursos = "SELECT * FROM categorias limit $incio, $quantidade_pg";
                $result = mysqli_query($conn, $result_cursos);
                $total_cursos = mysqli_num_rows($resultado_cursos);

                if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                              echo '<tr>';
                                                echo '<td>'.$row['descricao'].'</td>';?>
                                                <td> <a href='Administrativo.php?link=9&id=<?php echo $row['id']?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
                                                <?php
                            }
                        } else {?>
                           <div class="alert alert-danger">
                <strong>Informação!</strong> Não tem categoria Cadastrada.
            </div><?php
                        }
                        $conn->close();              
                ?>
              </tr>
             </tbody>
          </table>
        </div>
            <?php
				//Verificar a pagina anterior e posterior
				$pagina_anterior = $pagina - 1;
				$pagina_posterior = $pagina + 1;
			?>
			<nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="admCategoria/ListaCategorias2.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="admCategoria/ListaCategorias2.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="admCategoria/ListaCategorias2.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
      </div>

	
</body>
</html>
