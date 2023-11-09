<?php
function numRomano($numero) {
    $romanos = [
        1 => 'I',
        4 => 'IV',
        5 => 'V',
        9 => 'IX',
        10 => 'X'
    ];

    foreach ($romanos as $arabe => $romano) {
        if ($numero >= $arabe) {
            return $romano . numRomano($numero - $arabe);
        }
    }

    return '';
}

$numero_decimal = intval(readline("Ingresa un número entre 1 y 10: "));


if ($numero_decimal >= 1 && $numero_decimal <= 10) {
    $numero_romano = numRomano($numero_decimal);

    echo "El número romano equivalente es: $numero_romano\n";
} else {
    echo "Por favor, ingresa un número válido entre 1 y 10.\n";
}
?>