<?php
// Ejercicio: Array con números pares del 1 al 100 y se muestran como texto separados por comas

$pares = [];

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        $pares[] = $i;
    }
}

echo "Números pares del 1 al 100:\n";
echo implode(", ", $pares) . "\n";





?>
