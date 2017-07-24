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
                <h3>Cadastro Cliente Pessoa Fisica</h3>
                <div class="row espaco">
                    <div class="pull-right">
                        <a href='Administrativo.php?link=26'><button type='button' class='btn btn-sm btn-info'>Listar Pessoas Juridicas</button></a>				
                    </div>
                </div></br>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" data-toggle="validator" method="POST" action="processar/Cad_Pessoa_juridica.php">

                        <div class="form-group">
                            <label for="inputnome" class="col-sm-2 control-label">Razão Social</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="razao_social" placeholder="Razão Social"   
                                       data-error="Por favor, Digite a Razão Social." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputnome" class="col-sm-2 control-label">Nome Fantasia</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome_fantasia" placeholder="Razão Social">
                               
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputcpf" class="col-sm-2 control-label">CNPJ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ"   
                                       data-error="Por favor, Digite o CNPJ." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputemail1" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email1" placeholder="E-mail"   
                                       data-error="Por favor, Digite um e-mail válido." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputemail2" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email2" placeholder="E-amil">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputendereco" class="col-sm-2 control-label">Endereço</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="endereco" placeholder="Endereço"   
                                       data-error="Por favor, Digite o endereco." required >
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="inputnumero" class="col-sm-1 control-label">Número</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="numero" placeholder="Número"   
                                       data-error="Por favor, Digite o número do endereço." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                              <label for="inputcep" class="col-sm-2 control-label">CEP</label>
                            <div class="col-sm-3">
                                <input type="text" id="cep" class="form-control" name="cep" placeholder="CEP"   
                                       data-error="Por favor, Digite o CEP." maxlength="9" required >
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="inputbairro" class="col-sm-1 control-label">Bairro</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="bairro" placeholder="Bairro"   
                                       data-error="Por favor, Digite o Bairro." required >
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="inputcidade" class="col-sm-1 control-label">Cidade</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" name="cidade" placeholder="Cidade"   
                                       data-error="Por favor, Digite a Cidade." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Estados</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="estado">
                                    <option>Selecione</option>
                                    <?php
                                    $sql = "SELECT * FROM estado ";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <option value="<?php echo $row["Nome"]; ?>"><?php echo $row["Uf"] . "-" . $row["Nome"]; ?></option>
                                            <?php
                                        }
                                    }
                                    $_ESTADO = "idCidade";
                                    ?>
                                </select>
                            </div>

                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                    <label for="inputtelefone" class="col-sm-2 control-label">Telefone</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone"   
                               data-error="Por favor, Digite um telefone." required >
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputcelular" class="col-sm-2 control-label">Celular</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">  
                    </div>
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
