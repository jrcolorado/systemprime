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
        <div class="container theme-showcase" role="main">      
            <div class="page-header">
                <h1>Cadastrar Usuário</h1>
            </div>
            <div class="row espaco">
                <div class="pull-right">
                    <a href='Administrativo.php?link=2'><button type='button' class='btn btn-sm btn-info'>Listar Usuários</button></a>				
                </div>
            </div></br>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" data-toggle="validator" method="POST" action="Cad_Usuario5.php">

                        <div class="form-group">
                            <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" placeholder="Descrição do Nome"   
                                       data-error="Por favor, Digite o nome do usuário." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" data-error="Favor informar um e-mail valido." required>
                                <div class="help-block with-errors"></div>                            
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputlogin" class="col-sm-2 control-label">Login</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="login" placeholder="Login" data-error="Favor informar o login." required>
                                <div class="help-block with-errors"></div>                            
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputsenha" class="col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="senha" placeholder="Senha" data-error="Favor informar a Senha." required>
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

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- /container -->
    </body>
</html>
