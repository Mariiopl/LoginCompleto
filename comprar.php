<?php
include 'FuncionesSesion/LoginSession.php';
inicia_sesion();

// Verificar si hay un coche seleccionado
if (isset($_POST['coche'])) {
    $coche = $_POST['coche'];
    
    // Agregar el coche al carrito
    if (!in_array($coche, $_SESSION['carrito'])) {
        $_SESSION['carrito'][] = $coche;
    }
}

// Redirigir a la página anterior
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>
