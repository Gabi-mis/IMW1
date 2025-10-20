<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipo de Medalla</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
<div class="contenedor-formulario">
    <h2>Función A: Tipo de Medalla</h2>
    <form action="medalla.php" method="post">
        <label for="posicion">Introduce la posición obtenida:</label>
        <input type="text" id="posicion" name="posicion" required
               value="<?php echo isset($_POST['posicion']) ? htmlspecialchars($_POST['posicion']) : ''; ?>">
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Función que determina el tipo de medalla
    function tipoMedalla(int $posicion): ?string {
        switch ($posicion) {
            case 1: return "Oro";
            case 2: return "Plata";
            case 3: return "Bronce";
            default: return null;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $posicion = (int)$_POST['posicion'];
        $resultado = tipoMedalla($posicion);

        if ($resultado !== null) {
            echo "<div class='resultado'>Posición $posicion → Medalla de $resultado</div>";
        } else {
            echo "<div class='resultado'>Posición $posicion → Sin medalla</div>";
        }
    }
    ?>
</div>
</body>
</html>
