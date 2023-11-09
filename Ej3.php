<?php
function dameNumero($numerosYaSeleccionados) {
    do {
        $numero = mt_rand(1, 49);
    } while (in_array($numero, $numerosYaSeleccionados));

    return $numero;
}

$combinacion = [];

for ($i = 0; $i < 6; $i++) {
    $combinacion[] = dameNumero($combinacion);
}

sort($combinacion);

echo "Combinación de lotería primitiva: " . implode(', ', $combinacion) . "\n";
?>