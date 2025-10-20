<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Duplicar Número</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
<div class="contenedor-formulario">
    <h2>Función B: Duplicar Número</h2>
    <form action="duplicar.php" method="post">
        <label for="numero">Introduce un número positivo:</label>
        <input type="text" id="numero" name="numero" required
               value="<?php echo isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : ''; ?>">
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Función que duplica un número positivo
    function duplicarNumero(float $numero): float|string {
        if ($numero <= 0) return "No puedes usar un número en negativo o cero";
        return $numero * 2;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = (float)$_POST['numero'];
        $resultado = duplicarNumero($numero);

        echo "<div class='resultado'>Valor introducido: $numero → Resultado: $resultado</div>";
    }
    ?>
</div>
</body>
</html>