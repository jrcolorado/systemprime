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
    $id= $_GET['id'];
    
    $sql = "SELECT * FROM produtos WHERE id = '$id' LIMIT 1";
    $result = $conn->query($sql);
   
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $idProd =  $row['id'];
               $nome =  $row['nome'];
               $descricao_curta = $row['descricao_curta'];
               $descricao_longa = $row['descricao_longa'];
               $preço = $row['preco'];
                     
            }
       }

        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        ﻿
<div class="container theme-showcase" role="main">      
  <div class="page-header">
      <div class="row espaco">
          <h1>Produto</h1>
		<div class="pull-right">
                    <a href='Administrativo.php?link=13'><button type='button' class='btn btn-sm btn-info'>Listar Produtos</button></a>				
		</div>
	</div>
  </div>
  
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processar/DeletarProduto.php" enctype="multipart/form-data">
	   <input type="hidden" name="id" value="<?php echo "$idProd"; ?>">  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome do Produto</label>
			<div class="col-sm-10">
                            <input type="text" readonly="true" class="form-control" name="nome" placeholder="Nome do Produto" value="<?php echo "$nome"; ?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Curta</label>
			<div class="col-sm-10">
                            <textarea class="form-control ckeditor" rows="5" readonly="true" name="descricao_curta" placeholder="Descrição curta do produto"> <?php echo $descricao_curta; ?></textarea>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
			<div class="col-sm-10">
                            <textarea class="form-control ckeditor" rows="5" readonly="true" name="descricao_longa" placeholder="Descrição longa do produto" ><?php echo $descricao_longa; ?></textarea>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Preço</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="preco" readonly="true" placeholder="Preço" value="<?php echo "$preço"; ?>">
			</div>
		  </div>
            <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Excluir</button>
                      <a href='Administrativo.php?link=13'><button type='button' class='btn btn btn-info'>Cancelar</button></a>
                    </div>
                  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

       
    </body>
</html>
