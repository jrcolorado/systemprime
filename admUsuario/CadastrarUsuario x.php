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
//include_once './Seguranca.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
       <title></title>
    </head>
    <body>
        <div class="container theme-showcase" role="main">
            <div class="page-header"></br>
                <h1>Cadastro de Usuário</h1>
            </div>
        </div>
        <form class="form-horizontal" method="POST" action="processar/Cad_usuario.php">
            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input name="nome" type="text" class="form-control"  placeholder="Nome Completo"
                           data-error="Por favor, Digite o nome do Usuário." required>
                    <div class="help-block with-errors"></div>
                    </div>
            </div>
            
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input name="email" type="email" class="form-control" placeholder="E-mail"
                           data-error="Por favor, informe um e-mail valido." required>
                    <div class="help-block with-errors"></div>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputLogin" class="col-sm-2 control-label">Login</label>
                <div class="col-sm-10">
                    <input name="login" type="text" class="form-control" placeholder="Digite o login"
                           data-error="Por favor, informe o login." required>
                    <div class="help-block with-errors"></div>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input name="senha" type="password" class="form-control" placeholder="Senha" data-error="Por favor, informe o login." required>
                    <div class="help-block with-errors"></div>
                    </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Nivel Acesso</label>
                <div class="col-sm-10">
                    <select class="form-control" name="nivelAcesso" data-error="Por favor, informe o login." required>
                        <option>Selecionar</option>
                        <option value="1">Administartivo</option>
                        <option value="2">Usuario</option>
                    </select>
                    <div class="help-block with-errors"></div>
                    </div>
            </div>
            <!--  <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Remember me
                    </label>
                  </div>
                </div>
              </div> -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </form>
   <script src="js/validator.js"></script>
    </body>
</html>
