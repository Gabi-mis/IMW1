<?php
// Menú interactivo para ejecutar los scripts anteriores

while (true) {
    // Mostrar el menú
    echo "\n===== MENÚ DE EJERCICIOS PHP =====\n";
    echo "1. Adivinar número (adivinar.php)\n";
    echo "2. Números pares (pares.php)\n";
    echo "3. Contar palabras (contar_palabras.php)\n";
    echo "4. Coordenadas polares (coordenadas_polares.php)\n";
    echo "5. Ecuación de segundo grado (ecuacion_segundo_grado.php)\n";
    echo "6. Factorial (factorial.php)\n";
    echo "7. Array aleatorio y máximo (maximo_array.php)\n";
    echo "0. Salir\n";

    // Leer la opción del usuario
    $opcion = readline("Selecciona una opción: ");

    switch ($opcion) {
        case "1":
            system("php adivinar.php");
            break;
        case "2":
            system("php pares.php");
            break;
        case "3":
            system("php contar_palabras.php");
            break;
        case "4":
            system("php coordenadas_polares.php");
            break;
        case "5":
            system("php ecuacion_segundo_grado.php");
            break;
        case "6":
            system("php factorial.php");
            break;
        case "7":
            system("php maximo_array.php");
            break;
        case "0":
            echo "Saliendo del programa...\n";
            exit;
        default:
            echo "❌ Opción no válida. Intenta de nuevo.\n";
            break;
    }
}
?>


