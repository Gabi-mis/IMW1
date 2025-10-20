<?php
// Programa que calcula el factorial de un número entero positivo introducido por teclado
// Verifica que el número es correcto

$numero = (int)readline("Introduce un número entero positivo: ");

// Verificación de número válido
if ($numero < 0) {
    echo "❌ Error: El número debe ser positivo.\n";
    exit;
}

$factorial = 1;

// Cálculo del factorial
for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

echo "El factorial de $numero es: $factorial\n";
?>