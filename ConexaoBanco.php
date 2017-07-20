<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host="localhost";
        $user="root";
        $pass="475236";
        $banco="chat";
        // Create connection
        $conn = new mysqli($host, $user, $pass, $banco);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }   
        ?>
    </body>
</html>
