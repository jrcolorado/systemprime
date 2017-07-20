<?php
include_once './ConexaoBanco.php';
?>
<?php
	if (!isset($_GET['pg'])) {
		$pg = 1;
	} else {
		$pg = $_GET['pg'];
	}
	
	$total_reg = "20";
	$inicio = $pg -1; 
	$inicio = $inicio * $total_reg;
	
	$sql_todos = "SELECT * FROM usuarios ORDER BY nome";
	$sql 	   = "SELECT * FROM usuarios ORDER BY nome LIMIT $inicio, $total_reg";
	
	$rs_todos = $pdo->query($sql_todos)->fetchAll();
	$total_registros = count($rs_todos); // verifica o número total de registros
	$total_paginas = ceil($total_registros / $total_reg); // verifica o número total de páginas
	
	$rs = $pdo->query($sql)->fetchAll();
	
	$anterior = $pg -1; 
	$proximo = $pg +1;
	
	require("testepaginacao.php");
?>