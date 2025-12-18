<?php


// faire des titres propres

function titre($txt) {
    echo "<h2>$txt</h2>";
}

// Fonction EstPair

function EstPair($n) {
    return ($n % 2 == 0);
}


// Fonction Pythagore
function Hypotenuse($b, $c) {
    return sqrt(($b * $b) + ($c * $c));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php is great !</title>
</head>
<body>
    
<?php

// Exercice 1

titre("Boucle for (0 à 24)");
for ($i = 0; $i < 25; $i++) {
    echo $i . "<br>";
}

// Exercice 2

titre("Boucle while (25 à 1)");
$i = 25;
while ($i > 0) {
    echo $i . "<br>";
    $i--;
}

// Exercice 3


titre("Motif 1..n jusqu'à 25");
for ($ligne = 1; $ligne <= 25; $ligne++) {
    for ($col = 1; $col <= $ligne; $col++) {
        echo $col . " ";
    }
    echo "<br>";
}

// Exercice 4

titre("Somme de 1 à 30");
$somme = 0;
for ($i = 1; $i <= 30; $i++) {
    $somme += $i;
}
echo "Somme = " . $somme . "<br>";

// Exercice 5

titre("Fonction EstPair");
$test = 7;
echo $test . " est pair ? " . (EstPair($test) ? "oui" : "non") . "<br>";

// Exercice 6

titre("Nombres pairs de 1 à 20");
for ($i = 1; $i <= 20; $i++) {
    if (EstPair($i)) {
        echo $i . "<br>";
    }
}

// Exercice 7

titre("Pythagore (hypoténuse)");
$b = 3;
$c = 4;
echo "b = $b, c = $c => hypoténuse = " . Hypotenuse($b, $c) . "<br>";

// Exercice 8

titre("Condition heure");
$heure = 16; 
if ($heure >= 6 && $heure < 12) {
    echo "C'est le matin<br>";
} elseif ($heure >= 12 && $heure < 18) {
    echo "C'est l'après-midi<br>";
} else {
    echo "C'est le soir<br>";
}

// Exercice 9

titre("Condition ternaire (EstPair)");
$nombre = 10;
echo EstPair($nombre) ? "$nombre est pair<br>" : "$nombre est impair<br>";

// Exercie 10

titre("1FooBar (1 à 100)");
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "foobar<br>";
    } elseif ($i % 3 == 0) {
        echo "foo<br>";
    } elseif ($i % 5 == 0) {
        echo "bar<br>";
    } else {
        echo $i . "<br>";
    }
}

// Exercice 11

titre("Affichage de tableau");
$identitePersonne = [
    "nom" => "Croft",
    "prenom" => "Lara",
    "metier" => "Archéologue"
];
echo "<h1>C'est un plaisir de vous voir " .
     $identitePersonne["prenom"] . " " .
     $identitePersonne["nom"] . "!(" .
     $identitePersonne["metier"] . ")</h1>";


// Exercice 12

titre("Valeurs de 6 lettres");
$fighters = ['Zelda','Samus','Bowser','Peach','Lucina'];
for ($i = 0; $i < count($fighters); $i++) {
    if (strlen($fighters[$i]) == 6) {
        echo $fighters[$i] . "<br>";
    }
}
?>

</body>
</html>