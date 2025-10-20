<?php
// Conversión de coordenadas cartesianas (x, y) a polares (R, B)

// Solicitar valores al usuario
$x = (float)readline("Introduce el valor de x: ");
$y = (float)readline("Introduce el valor de y: ");

// Cálculos del módulo (R) y del ángulo (B)
$R = sqrt(($x ** 2) + ($y ** 2));      // raíz cuadrada de x² + y²
$B = rad2deg(atan2($y, $x));           // atan2 devuelve ángulo en radianes → convertir a grados

// Ajustar ángulo al rango 0–360
if ($B < 0) {
    $B += 360;
}

// Mostrar resultados
echo "\nCoordenadas polares:\n";
echo "R (módulo): " . number_format($R, 2) . "\n";
echo "B (ángulo): " . number_format($B, 2) . "°\n";

?>
