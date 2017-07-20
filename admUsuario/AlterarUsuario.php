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
    
    $sql = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
    $result = $conn->query($sql);
   
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
               $idUsuario =  $row['id'];
               $nome =  $row['nome'];
               $email = $row['email'];
               $login = $row['login'];
               $nivelAcesso = $row['nivel_acesso_id'];
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
        <h1>Alterar dados do Usuário</h1>
      </div>
      </div>
        <form class="form-horizontal" method="POST" action="processar/Update_usuario.php">
            <input type="hidden" name="id" value="<?php echo "$idUsuario"; ?>">    
                    <div class="form-groupNome">
                    <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                    <div class="col-sm-10">
                        <input name="nome" type="text" class="form-control" id="inputNome" value=" <?php echo $nome; ?>">
                    </br></div>
                  </div>
                  <div class="form-groupEmail">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="text" class="form-control" id="inputEmail" value=" <?php echo $email; ?>">
                   </br> </div>
                 </div>
                  <div class="form-groupLogin">
                    <label for="inputLogin" class="col-sm-2 control-label">Login</label>
                    <div class="col-sm-10">
                        <input name="login" type="text" class="form-control" id="inputLogin" value=" <?php echo $login; ?>">
                    </br></div>
                 </div>
                 <div class="form-groupNivelAcesso">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nivel Acesso</label>
                    <div class="col-sm-10">
                     <select class="form-control" name="nivelAcesso">
                            <option> Selecione </option>
                            <option value="1" <?php
                                    if($nivelAcesso == 1){
                                        echo 'selected';
                                    }
                                ?>>Administrativo                                
                            </option>
                            <option value="2" <?php
                                    if($nivelAcesso == 2){
                                        echo "selected";
                                    }
                                ?> >Usuario
                            </option>
                    </select>
                   </br> </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    
                      </div>
                    </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Alterar</button>
                     <a href='Administrativo.php?link=2'><button type='button' class='btn btn btn-info'>Cancelar</button></a>
                    </div>
                  </div>
                </form>
    </body>
</html>
