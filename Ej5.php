<?php
include 'datos.php';

function edadHumana($edadPerro) {
    return 31 + 16 * log($edadPerro);
}

function sobrePeso(&$datosPerros) {
    $perrosConSobrePeso = 0;

    foreach ($datosPerros as &$perro) {
        $sobrePesoCondicion = ($edadHumana = edadHumana($perro['edad'])) >= 60 && $perro['peso'] >= 7 ||
                              $edadHumana < 40 && $perro['peso'] >= 3 ||
                              $perro['peso'] >= 6;

        $perrosConSobrePeso += $perro['sobrePeso'] = $sobrePesoCondicion;
    }

    return $perrosConSobrePeso;
}

$sobrepesoTotal = sobrePeso($datosPerros);

echo "Número de perros con sobre-peso: $sobrepesoTotal\n";

print_r($datosPerros);
?>