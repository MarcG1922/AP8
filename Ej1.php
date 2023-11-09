<?php

$edad_hermano1 = intval(readline("Ingresa la edad del primer hermano: "));
$edad_hermano2 = intval(readline("Ingresa la edad del segundo hermano: "));


$diferencia = abs($edad_hermano1 - $edad_hermano2);

echo "La diferencia de edad entre los hermanos es: $diferencia\n";
?>