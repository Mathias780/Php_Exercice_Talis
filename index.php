<?php


// Fonction EstPair
function EstPair($n) {
    return ($n % 2 == 0);
}

// Exercice 1

"Boucle for (0 à 24)"
for ($i = 0; $i < 25; $i++) {
    echo $i . "<br>";
}

// Exercice 2

// "Boucle while (25 à 1)"
$i = 25;
while ($i > 0) {
    echo $i . "<br>";
    $i--;
}

// Exercice 3

// "Motif 1n jusqu'à 25"

for ($ligne = 1; $ligne <= 25; $ligne++) {
    for ($col = 1; $col <= $ligne; $col++) {
        echo $col . " ";
    }
    echo "<br>";
}

// Exercice 4

$somme = 0;
for ($i = 1; $i <= 30; $i++) {
    $somme += $i;
}
echo "Somme = " . $somme . "<br>";

// Exercice 5

$test = 7;
echo $test . " est pair ? " . (EstPair($test) ? "oui" : "non") . "<br>";

titre("6) Nombres pairs de 1 à 20");
for ($i = 1; $i <= 20; $i++) {
    if (EstPair($i)) {
        echo $i . "<br>";
    }
}
