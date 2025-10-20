<?php
// Ejercicio 4: contar palabras con explode() + count()

// Escribimos una frase por teclado
$frase = readline("Escribe una frase: ");

// Separa la frase en palabras usando el espacio como delimitador
$palabras = explode(" ", trim($frase));

// Contamos cuántas palabras hay
$cantidad = count($palabras);

// Mostramos la información
echo "\nMostramos la información del array de palabras:\n";
print_r($palabras);

echo "\nLa frase contiene $cantidad palabras.\n";
?>
