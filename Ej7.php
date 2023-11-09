<?php

$texto = "PHP es un lenguaje de programación poderoso y versátil. PHP es ampliamente utilizado para el desarrollo web.";

$palabraBuscada = readline("Ingresa una palabra para buscar en el texto: ");

$coincidencias = substr_count(strtolower($texto), strtolower($palabraBuscada));

if ($coincidencias > 0) {
    echo "La palabra '$palabraBuscada' se encontró $coincidencias veces en el texto.\n";

    $textoModificado = str_ireplace($palabraBuscada, strtoupper($palabraBuscada), $texto);
    echo "Texto modificado:\n$textoModificado\n";
} else {
    echo "La palabra '$palabraBuscada' no se encontró en el texto.\n";
}
?>