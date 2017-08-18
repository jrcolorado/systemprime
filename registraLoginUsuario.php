<?php

include_once '../ConexaoBanco.php';

session_start();

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$status= "0";
$usuario = $_SESSION['loginUsuario'];
echo $usuario."--".$ip;
mysqli_query($conn, "INSERT INTO usuarios_session (usuario, ip, status, session_new)VALUES ('$usuario', '$ip','$status', NOW())");



/*  function logoutUser() {
  $ip = getIp();
  $usuario = $_SESSION['loginUsuario'];
  mysqli_query($conn, "UPDATE usuarios_session set status ='1', session_end = NOW() WHERE ip='$ip' and usuario ='$usuario'");
  } */
?>