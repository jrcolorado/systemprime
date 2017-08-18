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
      include_once './ConexaoBanco.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
               
        <div class="container theme-showcase" role="main">

      <div class="page-header">
                <h1>Pesquisar Pessoa Juridica</h1>
                
            </div>
        
        <form class="form-horizontal" data-toggle="validator" method="POST" action="ListarBuscaPessoasJuridica.php">

                <div class="form-group">
                    <div class="col-sm-2">
                                <select class="form-control" name="opcaoPesquisa">
                                    <option>Selecione</option>
                                    <option value="razao_social">Razão Social</option>
                                    <option value="cnpj">CNPJ</option>
                                    <option value="cidade">Cidade</option>
                                </select>
                            </div>
            <label for="inputnome" class="col-sm-2 control-label">Descrição da pesquisa</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="descPesquisa" placeholder="Descrição da pesquisa"   
                       data-error="Por favor, Digite algo para a pesquisa." required >
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-3">
                    <button type="submit" class="btn btn-success">Pesquisar</button>
                </div>
            </div>
        </div>

              
            </form>
        
        
         
      </div>
       
      </body>
</html>
