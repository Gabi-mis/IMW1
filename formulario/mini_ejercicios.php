<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mini Ejercicios PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h2 {
            color: #0066cc;
            border-bottom: 2px solid #0066cc;
            padding-bottom: 5px;
        }
        .bloque {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<h1>Mini Ejercicios PHP</h1>

<div class="bloque">
    <h2>9.I. Mini - Ejercicio 1</h2>
    <?php
    // Generar número aleatorio entre 1 y 100
    $num = rand(1, 100);
    echo "Número generado: <b>$num</b><br>";

    if ($num <= 50) {
        echo "El número es menor o igual a 50.";
    } else {
        echo "El número es mayor que 50.";
    }
    ?>
</div>

<div class="bloque">
    <h2>9.II. Mini - Ejercicio 2</h2>
    <?php
    // Generar número aleatorio entre 1 y 5
    $num2 = rand(1, 5);
    $nombres = [1 => "uno", 2 => "dos", 3 => "tres", 4 => "cuatro", 5 => "cinco"];

    echo "Número generado: <b>$num2</b><br>";
    echo "En castellano: <b>" . $nombres[$num2] . "</b>";
    ?>
</div>

<div class="bloque">
    <h2>9.III. Mini - Ejercicio 3</h2>
    <?php
    // Día de la semana
    $diaNumero = date("N"); // 1 (lunes) - 7 (domingo)
    $dias = [
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado",
        7 => "Domingo"
    ];
    echo "Hoy es <b>" . $dias[$diaNumero] . "</b>.";
    ?>
</div>

<div class="bloque">
    <h2>9.IV. Mini - Ejercicio 4: Portero de discoteca automático</h2>
    <?php
    // Año actual automático
    $anioActual = date("Y");

    // Simulamos el año de nacimiento (puedes cambiarlo para probar)
    $anioNacimiento = 2005;

    $edad = $anioActual - $anioNacimiento;

    echo "Año de nacimiento: $anioNacimiento<br>";
    echo "Edad actual: $edad años<br>";

    if ($edad < 18) {
        echo "⛔ Eres menor de edad, vete a dormir.";
    } elseif ($edad > 65) {
        echo "👴 Eres demasiado mayor para entrar.";
    } else {
        echo "✅ Puedes pasar dentro.";
    }
    ?>
</div>

<div class="bloque">
    <h2>9.V. Mini - Ejercicio 5: Contacto Fraudulento</h2>
    <?php
    // Ejemplo de datos recibidos
    $nombre = "Carlos Pérez";
    $telefono = "612345678";
    $email = "carlos@example.com";
    $mensaje = "Hola, quisiera información sobre el curso.";

    echo "
    <p><b>Nombre:</b> $nombre</p>
    <p><b>Teléfono:</b> $telefono</p>
    <p><b>Email:</b> $email</p>
    <p><b>Mensaje:</b> $mensaje</p>
    <p><i>Contacto registrado correctamente (plantilla de ejemplo).</i></p>
    ";
    ?>
</div>

<div class="bloque">
    <h2>9.VI. Mini - Ejercicio 6: ¿Quién saca al perro?</h2>
    <?php
    // Crear array con 8 nombres
    $nombres = ["Lucía", "Juan", "María", "Pedro", "Laura", "Miguel", "Sofía", "Andrés"];

    // Desordenar el array
    shuffle($nombres);

    // Generar número aleatorio entre 0 y 7
    $numAleatorio = rand(0, 7);

    echo "Número aleatorio generado: $numAleatorio<br>";
    echo "<b>" . $nombres[$numAleatorio] . "</b> saca al perro hoy 🐕";
    ?>
</div>

</body>
</html>
