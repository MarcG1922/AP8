<?php
function imprimirFigura($caracter, $numero) {
    for ($i = 1; $i <= $numero; $i += 2) {
        echo str_repeat($caracter, $i) . PHP_EOL;
    }

    for ($i = $numero - 2; $i >= 1; $i -= 2) {
        echo str_repeat($caracter, $i) . PHP_EOL;
    }
}

imprimirFigura('*', 4);
?>