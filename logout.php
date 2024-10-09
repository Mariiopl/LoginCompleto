<?php
include 'FuncionesSesion/LoginSession.php';
inicia_sesion(); 


if (isset($_SESSION['usuarios_conectados']) && isset($_SESSION['usuario_actual'])) {
    $usuario = $_SESSION['usuario_actual']; 

   
    $_SESSION['usuarios_conectados'] = array_diff($_SESSION['usuarios_conectados'], [$usuario]);
}


cierra_sesion();


header("Location: index.html");
exit;
?>
