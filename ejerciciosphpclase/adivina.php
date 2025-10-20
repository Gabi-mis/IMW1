<?php

// Uso: php adivinar.php

// Pedir número máximo de intentos
$maxIntentos = (int)readline("Introduce el número máximo de intentos: ");

// Generar número aleatorio entre 1 y 100
$numeroSecreto = rand(1, 100);

echo "He pensado un número entre 1 y 100.\n";
echo "Tienes $maxIntentos intentos para adivinarlo.\n\n";

// Bucle de intentos
for ($intento = 1; $intento <= $maxIntentos; $intento++) {
    $numeroUsuario = (int)readline("Intento $intento de $maxIntentos - Introduce tu número: ");

    if ($numeroUsuario === $numeroSecreto) {
        echo "🎉 ¡Correcto! Has adivinado el número ($numeroSecreto) en el intento $intento.\n";
        exit;
    } elseif ($numeroUsuario < $numeroSecreto) {
        echo "❌ El número secreto es mayor.\n\n";
    } else {
        echo "❌ El número secreto es menor.\n\n";
    }
}

// Si llegamos aquí, no se adivinó el número
echo "😢 Se acabaron los intentos. El número correcto era $numeroSecreto.\n";
?>
