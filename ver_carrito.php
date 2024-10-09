<?php
include 'FuncionesSesion/LoginSession.php';
inicia_sesion();

// Obtener los coches del carrito
$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : [];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
</head>
<body>
    <h1>Mi Carrito</h1>

    <?php if (empty($carrito)): ?>
        <p>No has añadido coches a tu carrito.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($carrito as $coche): ?>
                <li><?php echo $coche; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    
    <a href="bienvenido.php">Volver al listado de marcas</a><br/><br/>
    <a href="http://localhost/SERVIDOR/TrabajoLoginCompleto/audi.html">Volver a Audi</a><br/>
    <a href="http://localhost/SERVIDOR/TrabajoLoginCompleto/renault.html">Volver a Renault</a>
</body>
</html>
