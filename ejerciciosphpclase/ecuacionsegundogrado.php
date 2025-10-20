<?php
// Programa que calcula las soluciones de una ecuación de segundo grado
// ax² + bx + c = 0

// Solicitar coeficientes
$a = (float)readline("Introduce el valor de a: ");
$b = (float)readline("Introduce el valor de b: ");
$c = (float)readline("Introduce el valor de c: ");

// Calcular discriminante
$discriminante = ($b ** 2) - (4 * $a * $c);

echo "\nResultado:\n";

// Si el discriminante es positivo → dos soluciones reales
if ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    echo "Dos soluciones reales:\n";
    echo "x1 = " . number_format($x1, 2) . "\n";
    echo "x2 = " . number_format($x2, 2) . "\n";

// Si el discriminante es cero → una sola solución real
} elseif ($discriminante == 0) {
    $x = -$b / (2 * $a);
    echo "Una solución real doble:\n";
    echo "x = " . number_format($x, 2) . "\n";

// Si el discriminante es negativo → soluciones imaginarias
} else {
    $parteReal = -$b / (2 * $a);
    $parteImaginaria = sqrt(-$discriminante) / (2 * $a);
    echo "Dos soluciones complejas:\n";
    echo "x1 = " . number_format($parteReal, 2) . " + " . number_format($parteImaginaria, 2) . "i\n";
    echo "x2 = " . number_format($parteReal, 2) . " - " . number_format($parteImaginaria, 2) . "i\n";
}

?>