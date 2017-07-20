<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
    include_once './ConexaoBanco.php';
    include_once './TemplateMenu.php';
    include_once './Seguranca.php'; 

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
	<h1>Cadastrar Produto</h1>
         <div class="row espaco">
		<div class="pull-right">
			<a href='Administrativo.php?link=13'><button type='button' class='btn btn-sm btn-info'>Listar Produtos</button></a>				
		</div>
	</div>
  </div>
 
  <div class="row">
      <div class="col-md-12"></div>
	  <form class="form-horizontal" method="POST" action="processar/Cad_Produto.php" enctype="multipart/form-data">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome do Produto</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome" placeholder="Nome do Produto" data-error="Por favor, informe o nome." required>
                    <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Curta</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="descricao_curta" placeholder="Descrição curta do produto" data-error="Por favor, informe a Descrição." required>
                   </textarea>
                             <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição Longa</label>
			<div class="col-sm-10">
				<textarea class="form-control ckeditor" rows="5" name="descricao_longa" placeholder="Descrição longa do produto" data-error="Por favor, informe a Descrição." required>
                    </textarea>
                            <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Preço</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="preco" placeholder="Preço" data-error="Por favor, informe o Preço." required>
                    <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="tag" placeholder="Tag" data-error="Por favor, informar a Tag." required>
                          <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="description" placeholder="Description" data-error="Por favor, informe a Description." required>
                        <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Foto do Produto</label>
				<div class="col-sm-10">
				<input name="arquivo" type="file"/>	
				</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Categorias</label>
			<div class="col-sm-10">
			  <select class="form-control" name="categoria_id" data-error="Por favor, informe a Description." required>
				  <option>Selecione</option>
				  <?php 
                                  
                                     $sql = "SELECT * FROM categorias ";
                                     $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
                                                ?>
								<option value="<?php echo $row["id"]; ?>"><?php echo $row["descricao"];?></option>
							<?php
						}
                                                    }
					?>
				</select>
                            <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Situação</label>
			<div class="col-sm-10">
			   <select class="form-control" name="situacao_id" data-error="Por favor, informe a Description." required>
				  <option>Selecione</option>
				  <?php 
                                  
                                     $sql = "SELECT * FROM situacaos ";
                                     $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
                                                ?>
								<option value="<?php echo $row["id"]; ?>"><?php echo $row["nome"];?></option>
							<?php
						}
                                                    }
					?>
				</select>
                              <div class="help-block with-errors"></div>
			</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	
</div> <!-- /container -->

       
    </body>
</html>
