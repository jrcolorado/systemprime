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
    
    $sql = "SELECT * FROM clientes WHERE id = '$id' LIMIT 1";
    $result = $conn->query($sql);
   
       if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
                $idCliente =  $row['id'];
                $razao_Social   = $row['razao_social'];
                $nome_fantasia   = $row['nome_fantasia'];
                $cnpj   = $row['cnpj'];
                $email1   = $row['email1'];
                $email2   = $row['email2'];
                $endereco   = $row['endereco'];
                $numero   = $row['numero'];
                $bairro   = $row['bairro'];
                $cidade   = $row['cidade'];
                $estado   = $row['estado'];
                $cep   = $row['cep'];
                $telefone   = $row['telefone'];
                $celular   = $row['celular'];
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
        <h3>Alteração Dados do Cliente</h3>
      </div>
      </div>
     
        <form class="form-horizontal" method="POST" action="processar/Update_PessoaJuridica.php">
              <input type="hidden" name="id" value="<?php echo "$idCliente"; ?>"> 
              <div class="form-group">
                            <label for="inputnome" class="col-sm-2 control-label">Razão Social</label>
                            <div class="col-sm-10">
                                <input type="text" value=" <?php echo $razao_Social; ?>"class="form-control" name="razao_social" placeholder="Descrição da Razão Social"   
                                       data-error="Por favor, Digite a Razão Social." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
              <div class="form-group">
                            <label for="inputnome" class="col-sm-2 control-label">Nome Fantasia</label>
                            <div class="col-sm-10">
                                <input type="text" value=" <?php echo $nome_fantasia; ?>"class="form-control" name="nome_fantasia" placeholder="Nome fantasia">   
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputcpf" class="col-sm-2 control-label">CNPJ</label>
                            <div class="col-sm-10">
                                <input type="text" value=" <?php echo $cnpj ?>" class="form-control" name="cnpj" placeholder="CNPJ"   
                                       data-error="Por favor, Digite o CNPJ." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputemail1" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" value=" <?php echo $email1; ?>" class="form-control" name="email1" placeholder="E-mail" 
                                       data-error="Por favor, Digite um e-mail válido." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputemail2" class="col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" value=" <?php echo $email2; ?>" class="form-control" name="email2" placeholder="E-amil">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputendereco" class="col-sm-2 control-label">Endereço</label>
                            <div class="col-sm-6">
                                <input type="text" value=" <?php echo $endereco; ?>" class="form-control" name="endereco" placeholder="Endereço"   
                                       data-error="Por favor, Digite o endereco." required >
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="inputnumero" class="col-sm-1 control-label">Número</label>
                            <div class="col-sm-3">
                                <input type="text" value=" <?php echo $numero; ?>" class="form-control" name="numero" placeholder="Número"   
                                       data-error="Por favor, Digite o número do endereço." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputcep" class="col-sm-2 control-label">CEP</label>
                            <div class="col-sm-3">
                                <input type="text" value=" <?php echo $cep; ?>" class="form-control" name="cep" placeholder="CEP"   
                                       data-error="Por favor, Digite o CEP." required >
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="inputbairro" class="col-sm-1 control-label">Bairro</label>
                            <div class="col-sm-3">
                                <input type="text" value=" <?php echo $bairro; ?>" class="form-control" name="bairro" placeholder="Bairro"   
                                       data-error="Por favor, Digite o Bairro." required >
                                <div class="help-block with-errors"></div>
                            </div>
                            <label for="inputcidade" class="col-sm-1 control-label">Cidade</label>
                            <div class="col-sm-2">
                                <input type="text" value=" <?php echo $cidade; ?>" class="form-control" name="cidade" placeholder="Cidade"   
                                       data-error="Por favor, Digite a Cidade." required >
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
              <div class="form-group">
                  <label for="inputtelefone" class="col-sm-2 control-label">Telefone</label>
                  <div class="col-sm-3">
                      <input type="text" value=" <?php echo $telefone; ?>" class="form-control" name="telefone" placeholder="Telefone"   
                             data-error="Por favor, Digite um telefone." required >
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="form-group">
                  <label for="inputcelular" class="col-sm-2 control-label">Celular</label>
                  <div class="col-sm-3">
                      <input type="text" value=" <?php echo $celular; ?>" class="form-control" name="celular" placeholder="Celular">   
                      
              </div>
        </div>
            
              
              
              < <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success">Alterar</button>
                     <a href='Administrativo.php?link=26'><button type='button' class='btn btn btn-info'>Cancelar</button></a>
                    </div>
                  </div>
                
                </form>
    </body>
</html>
