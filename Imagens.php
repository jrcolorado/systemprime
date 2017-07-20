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
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <div class="container theme-showcase" role="main">
            <div class="page-header"></br>
                <h1>Imagens</h1>
            </div>
        </div>
        <form class="form-horizontal">
            <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="img/w3images/lights.jpg">
        <img src="img/w3images/lights.jpg" class="img-responsive" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="img/w3images/nature.jpg">
        <img src="img/w3images/nature.jpg" class="img-responsive" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="img/w3images/fjords.jpg">
        <img src="img/w3images/fjords.jpg" class="img-responsive" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div>
               
        </form>
    </body>
</html>
