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
    
    $sql = "SELECT * FROM categorias WHERE id = '$id' LIMIT 1";
    $result = $conn->query($sql);
   
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $descricao=  $row['descricao'];
               $idCategoria =$row['id'];
               }
       }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div class="container theme-showcase" role="main">
   <div class="page-header"></br>
        <h1>Alterar descrição da Categoria</h1>
      </div>
      </div>
        <form class="form-horizontal" method="POST" action="processar/Update_categoria.php">
            <input type="hidden" name="id" value="<?php echo "$idCategoria"; ?>">    
                    <div class="form-groupNome">
                    <label for="inputDescricao" class="col-sm-2 control-label">Descrição</label>
                    <div class="col-sm-10">
                        <input name="descricao" type="text" class="form-control" id="inputNome" value=" <?php echo $descricao; ?>">
                    </br></div>
                  </div>
                   </br> 
          <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Alterar</button>
                     <a href='Administrativo.php?link=7'>
                         <button type='button' class='btn btn btn-info'>Cancelar</button></a>
                    </div>
                  </div>
                </form>
    </body>
</html>
