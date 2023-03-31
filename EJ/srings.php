<?php

// 1. Crea una variable y asígnale el valor "La comida que más me gusta es el sushi".
$comida = "La comida que más me gusta es el sushi";

// 2. Determina la posición de la palabra "gusta" en la cadena.
$posicion = strpos($comida, "gusta");
echo "La posición de la palabra 'gusta' es: $posicion\n";

// 3. Reemplaza la palabra "más" por la palabra "menos".
$nuevaComida = str_replace("más", "menos", $comida);
echo "La nueva cadena es: $nuevaComida\n";

// 4. Comprueba si en la cadena existe la palabra "pasta".
if (strpos($comida, "pasta") !== false) {
    echo "La palabra 'pasta' está en la cadena\n";
} else {
    echo "La palabra 'pasta' no está en la cadena\n";
}

// 5. Invierte el orden de la cadena.
$comidaInvertida = strrev($comida);
echo "La cadena invertida es: $comidaInvertida\n";

// 6. Cuenta cuántas vocales "e" hay en la cadena.
$numVocales = substr_count(strtolower($comida), 'e');
echo "Hay $numVocales vocales 'e' en la cadena\n";