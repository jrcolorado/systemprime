<?php
require_once './registraLogoutUsuario.php';
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    session_start();
    session_destroy();
    unset(     
            $_SESSION['loginUsuario'],
            $_SESSION['nomeUsuario'],
            $_SESSION['idUsuario'],
            $_SESSION['nivelAcessoUsuario'],
            $_SESSION['senhaUsuario']                
            );
    header("Location: Login.php");
        
        ?>

