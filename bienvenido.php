<?php
include 'FuncionesSesion/LoginSession.php';
inicia_sesion();

// Si no hay carrito, crearlo
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Lista de marcas de coches
$marcas = [
    'Renault' => 'renault.html',
    'Audi' => 'audi.html'
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <article>
            <section>
                <h1>Bienvenido</h1>
                <p>Has iniciado sesión correctamente.</p>
                
             
                <h2>Marcas de Coches</h2>
                <ul>
                    <?php foreach ($marcas as $marca => $url): ?>
                        <li>
                            <a href="<?php echo $url; ?>"><?php echo $marca; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                
                
                <a href="ver_carrito.php">Ver mi carrito</a><br/><br/>
                
                
                <form method="post" action="logout.php">
                    <button type="submit">Cerrar Sesión</button>
                </form>
            </section>
        </article>
    </main>
</body>
</html>
