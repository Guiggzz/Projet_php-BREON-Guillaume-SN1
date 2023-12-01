<?php
//Une baignoire d’une capacité de 250 litres se remplit à la vitesse de 12 litres
//par minute, mais fuit à la vitesse de 0,75 litre par minute.
//Écrire un algorithme qui affiche pour chaque minute le volume d’eau présent
//dans la baignoire, jusqu’à son remplissage.

$baignoire = 0;
$minutes = 0;
$fuite = 0.75;
$litres_par_min = 12 - $fuite;

while($baignoire <= 250){
    $baignoire = $baignoire + $litres_par_min;
    $minutes++;
    echo("Minutes ".$minutes." : ".$baignoire." litres ".PHP_EOL);
}
echo("Baignoire remplie !")
?>


