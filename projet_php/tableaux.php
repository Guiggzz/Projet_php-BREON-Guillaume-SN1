<?php
// Soient 2 tableaux, on souhaite calculer dans un troisième tableau le produit
// des éléments de tableaux aux mêmes positions, puis additionner le tout et
// afficher le résultat.

$tableau1 = [1, 2, 3, 4, 5, 6, 7];
$tableau2 = [8, 9, 5, 5, 5, 2, 7];
$tableau3 = [];

if (count($tableau1) == count($tableau2)) {
    for ($i = 0; $i < count($tableau1); $i++) {
        $tableau3[] = ($tableau1[$i] * $tableau2[$i]);
    }
    echo array_sum($tableau3);
} else {
    echo "Les tableaux ne sont pas de la même taille";
}
?>