<?php
function est_premier($nombre) {
    if ($nombre < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($nombre); $i++) {
        if ($nombre % $i === 0 or $nombre % 2 == 0) {
            return false;
        }
    }
    return true;
}

$nbrpremier = [];
$nombre = 2;

while (count($nbrpremier) < 100) {
    if (est_premier($nombre)) {
        $nbrpremier[] = $nombre;
    }
    $nombre++;
}

foreach ($nbrpremier as $nombrePremier) {
    echo $nombrePremier . " ";
}

?>