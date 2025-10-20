<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Ejercicio</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="contenedor-formulario">
        <h2>Resultado</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $valor1 = trim($_POST["valor1"]);
            $valor2 = trim($_POST["valor2"]);

            echo "<p><b>Valor 1:</b> $valor1</p>";
            echo "<p><b>Valor 2:</b> $valor2</p>";
            echo "<hr>";

            // Detección del tipo de ejercicio
            if (is_numeric($valor1) && is_numeric($valor2)) {
                $num1 = (float)$valor1;
                $num2 = (float)$valor2;

                // --- Ejercicio INI: Comparar valores ---
                if ($num1 != $num2 && abs($num1 - $num2) > 1) {
                    echo "<h3>Ejercicio 1: Comparar valores</h3>";
                    if ($num1 > $num2) {
                        $resultado = "El mayor es: $num1";
                    } elseif ($num2 > $num1) {
                        $resultado = "El mayor es: $num2";
                    } else {
                        $resultado = "iguales";
                    }
                    echo "<p><b>Resultado:</b> $resultado</p>";

                // --- Ejercicio 3: Números entre dos valores ---
                } elseif ($num1 != $num2 && abs($num1 - $num2) > 1) {
                    echo "<h3>Ejercicio 3: Números entre $num1 y $num2</h3>";
                    $resultado = "";
                    if ($num1 < $num2) {
                        for ($i = $num1; $i <= $num2; $i++) {
                            $resultado .= $i . ", ";
                        }
                    } else {
                        for ($i = $num1; $i >= $num2; $i--) {
                            $resultado .= $i . ", ";
                        }
                    }
                    echo "<p><b>Resultado:</b> " . rtrim($resultado, ", ") . "</p>";

                // --- Ejercicio 2: Tabla de multiplicar ---
                } elseif ($num1 >= 1 && $num1 <= 10 && $num2 == 0) {
                    echo "<h3>Ejercicio 3.1: Tabla de multiplicar (sintaxis alternativa)</h3>";

$num1 = 5; // Cambia este valor para probar

if ($num1 < 1 || $num1 > 10):
    echo "Valor erróneo (debe estar entre 1 y 10)";
else:
    echo "<p>Tabla de multiplicar del $num1:</p>";
    for ($i = 1; $i <= 10; $i++):
        echo "$num1 x $i = " . ($num1 * $i) . "<br>";
    endfor;
endif;
                }

            } elseif (is_numeric($valor1) && !is_numeric($valor2)) {
                // --- Ejercicio 1: Peso en otro planeta ---
                echo "<h3>Ejercicio 2: Peso en otro planeta</h3>";
                $peso = (float)$valor1;
                $planeta = strtolower($valor2);

                $factores = [
                    "mercurio" => 0.38,
                    "venus" => 0.91,
                    "tierra" => 1.00,
                    "marte" => 0.38,
                    "jupiter" => 2.34,
                    "saturno" => 1.06,
                    "urano" => 0.92,
                    "neptuno" => 1.19
                ];

                if (isset($factores[$planeta])) {
                    $peso_planeta = round($peso * $factores[$planeta], 2);
                    echo "<p>Peso en la Tierra: $peso kg</p>";
                    echo "<p>Planeta: $planeta</p>";
                    echo "<p><b>Peso en $planeta:</b> $peso_planeta kg</p>";
                } else {
                    echo "<p><b>Planeta desconocido</b></p>";
                }

            } else {
                echo "<p>No se pudo determinar qué ejercicio ejecutar. Verifica los valores.</p>";
            }

        } else {
            echo "<p>No se recibieron datos del formulario.</p>";
        }
        ?>
    </div>
</body>
</html>