<?php
session_start();
include_once("./Seguranca.php");
include_once("./ConexaoBanco.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página Administrativa">
    <meta name="author" content="Cesar">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Administrativo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body role="document">
	<?php
		include_once("./TemplateMenu.php");
		
		$link = $_GET["link"];
		
		$pag[1] = "Home.php";                
		$pag[2] = "admUsuario/ListarUsuarios_1.php";
		$pag[3] = "admUsuario/CadastrarUsuario.php";
		$pag[4] = "admUsuario/AlterarUsuario.php";		
		$pag[5] = "admUsuario/VisualizarUsuario.php";
                $pag[6] = "admCategoria/CadastrarCategoria.php";
		$pag[7] = "admCategoria/ListaCategorias.php";
		$pag[8] = "admCategoria/Visualcategoria.php";
		$pag[9] = "admCategoria/AlterarCategoria.php";
                $pag[10] = "Logout.php";
                $pag[11] = "admUsuario/ExcluirUsuario.php";     
                $pag[12] = "admProduto/CadastrarProduto.php";
                $pag[13] = "admProduto/ListaProdutos.php";
                $pag[14] = "admProduto/VisualizarProduto.php";
                $pag[15] = "admProduto/EcxluirProduto.php";
                $pag[16] = "admProduto/AlterarProduto.php";
                $pag[17] = "admProduto/AlterarPrecoProduto.php";
                $pag[18] = "admCliente/CadastrarCliente.php";
                $pag[19] = "admCliente/VisualizarCliente.php";
                $pag[20] = "admCliente/AlterarCliente.php";
                $pag[21] = "admCliente/ExcluiCliente.php";
                $pag[22] = "admCliente/ListaClientes.php";
                $pag[23] = "admCliente/CadPessoaFisica.php";
                $pag[24] = "admCliente/CadPessoaJuridica.php";
                $pag[25] = "admCliente/ListarPessoasFisica_1_1.php";
                $pag[26] = "admCliente/ListarPessoasJuridica_1_1.php";
                $pag[27] = "admCliente/VisualizarPessoaFisica.php";
                $pag[28] = "admCliente/AlterarPessoaFisica.php";
                $pag[29] = "admCliente/ExcluirPessoaFisica.php";
                $pag[30] = "admCliente/VisualizarPessoaJuridica.php";
                $pag[31] = "admCliente/AlterarPessoaJuridica.php";
                $pag[32] = "admCliente/ExcluirPessoaJuridica.php";
                $pag[70] = "Imagens.php"; 
                $pag[71] = "ImagensGaleria.php";
                $pag[72] = "admCliente/ClienteJaCadastrado.php";
                $pag[73] = "PesquisarPessoasFisica.php";
                $pag[74] = "PesquisarPessoasJuridicas.php";
                $pag[98] = "ListaUsuariosLogados.php";
                $pag[99] = "Login.php";
                $pag[100] = "admCategoria/CadastrarCategoria_1.php";
                $pag[101] = "processar/Cad_Categoria.php";
                $pag[199] = "TemplateMenu.php";
                
                
             
		if(!empty($link)){
			if(file_exists($pag[$link])){
				include $pag[$link];
			}else{
				include "./Home.php";
			}
		}else{
			include "./Home.php";
		}
		
	?>
    
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
