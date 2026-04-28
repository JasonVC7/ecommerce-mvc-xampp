<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<h1>Catálogo de Productos</h1>

<div class="contenedor-productos">
    <?php foreach ($productos as $producto): ?>
        <div class="producto">
            <img 
                src="<?php echo htmlspecialchars($producto['imagen']); ?>" 
                alt="<?php echo htmlspecialchars($producto['nombre']); ?>"
            >
            <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
            <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
            <p><strong>$<?php echo number_format($producto['precio'], 2); ?></strong></p>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>