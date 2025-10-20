<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario en PHP</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="contenedor-formulario">
        <h2>Formulario de valores</h2>
        <form action="ejercicio.php" method="post">
            <label for="valor1">Valor 1:</label>
            <input type="text" id="valor1" name="valor1" required>

            <label for="valor2">Valor 2:</label>
            <input type="text" id="valor2" name="valor2" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

