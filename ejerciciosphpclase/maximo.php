<?php
// Programa que pide por teclado el tamaño del array de números a crear.
// A continuación, se generarán tantos números aleatorios como entradas haya en el array
// y se mostrará el máximo de los números generados.
// También se mostrarán todos los números separados por comas.

$tamano = (int)readline("Introduce el tamaño del array: ");

if ($tamano <= 0) {
    echo "❌ Error: el tamaño debe ser un número positivo.\n";
    exit;
}

$numeros = [];

// Generar números aleatorios y guardarlos en el array
for ($i = 0; $i < $tamano; $i++) {
    $numeros[] = rand(1, 100);
}

// Mostrar los números generados
echo "\nNúmeros generados:\n";
echo implode(", ", $numeros) . "\n";

// Calcular el máximo
$maximo = max($numeros);

echo "\nEl número máximo es: $maximo\n";
?>