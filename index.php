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

// Exercice 6

for ($i = 1; $i <= 20; $i++) {
    if (EstPair($i)) {
        echo $i . "<br>";
    }
}

// Exercice 7

$b = 3;
$c = 4;
echo "b = $b, c = $c => hypoténuse = " . Hypotenuse($b, $c) . "<br>";

// Exercice 8

$heure = 16; // change la valeur pour tester
if ($heure >= 6 && $heure < 12) {
    echo "C'est le matin<br>";
} elseif ($heure >= 12 && $heure < 18) {
    echo "C'est l'après-midi<br>";
} else {
    echo "C'est le soir<br>";
}

// Exercice 9

$nombre = 10;
echo EstPair($nombre) ? "$nombre est pair<br>" : "$nombre est impair<br>";