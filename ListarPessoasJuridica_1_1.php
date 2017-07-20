<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php
    session_start();
      include_once './TemplateMenu.php';
      include_once './Seguranca.php';
      include_once './ConexaoBanco.php';
      include_once './conexao.php';
?>
<?php 
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os cursos da tabela
$result_curso = "SELECT * FROM clientes where tipo = '0'";
$resultado_curso = mysqli_query($conn, $result_curso);

//Contar o total de cursos
$total_cursos = mysqli_num_rows($resultado_curso);

//Seta a quantidade de cursos por pagina
$quantidade_pg = 4;

//calcular o número de pagina necessárias para apresentar os cursos
$num_pagina = ceil($total_cursos/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$result_cursos = "SELECT * FROM clientes where tipo = '0' limit $incio, $quantidade_pg";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$total_cursos = mysqli_num_rows($resultado_cursos);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Clientes</h1>
			</div>
			 <div class="col-md-12">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>Razão Social</th> 
                            <th>CNPJ</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                        $result_cursos = "SELECT * FROM clientes where tipo = '0' ORDER BY razao_social ASC limit $incio, $quantidade_pg";
                            $result = mysqli_query($conn, $result_cursos);
                            $total_cursos = mysqli_num_rows($resultado_cursos);
                            ;

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<tr>';
                                    echo '<td>' . $row['razao_social'] . '</td>';
                                    echo '<td>' . $row['cnpj'] . '</td>';
                                    echo '<td>' . $row['email1'] . '</td>';
                                    echo '<td>' . $row['telefone'] . '</td>';
                                    echo '<td>' . $row['cidade'] . '</td>';
                                    ?>
                                    <td> <a href='Administrativo.php?link=27&id=<?php echo $row['id'] ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a></td>
                                    <td> <a href='Administrativo.php?link=28&id=<?php echo $row['id'] ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a></td>
                                    <td> <a href='Administrativo.php?link=29&id=<?php echo $row['id'] ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a></td>
                                    <?php
                                }
                            } else {?>
                                <div class="alert alert-danger">
                <strong>Informação!</strong>Nenhum Cliente encontrado.
            </div>
                        <?php  
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
							<a href="ListarPessoasJuridica_1_1.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="ListarPessoasJuridica_1_1.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
		</div>
		
		
	</body>
</html>