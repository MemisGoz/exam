<?php

// Eksempel på literals og variabler
$navn = "Alice"; // Streng-literal tilordnes til variablen $navn
$alder = 25; // Heltals-literal tilordnes til variablen $alder

function minFunktion() {
    $lokalVariabel = "Dette er en lokal variabel";
    echo $lokalVariabel;
}

minFunktion(); // Output: Dette er en lokal variabel
echo "<br>" . $navn; // Output: Alice

echo "<br>";

//passing variables by reference
function opdaterVariabel(&$variabel) {
    $variabel = "Ny værdi";
}

$navn = "Alice";
opdaterVariabel($navn);
echo $navn; // Output: Ny værdi

echo "<br>";

//static and global variables
function plusFunktion() {
    static $tal = 0; // Statisk variabel
    $tal++; // Øger værdien af den statiske variabel
    echo $tal . "<br>";
}

plusFunktion(); // Output: 1
plusFunktion(); // Output: 2

$globalVariabel = "Dette er en global variabel ";

function visGlobalVariabel() {
    global $globalVariabel; // Bruger den globale variabel inden for funktionen
    echo $globalVariabel;
}

visGlobalVariabel(); // Output: Dette er en global variabel

echo "<br>";

//Booleans, comparison operators
$age = 25;
$isAdult = ($age >= 18); // Sammenligning, vil returnere true hvis $age er større end eller lig med 18
$isTeenager = ($age >= 13 && $age <= 19); // Sammensat sammenligning ved hjælp af logiske operatorer

echo $isAdult . "<br>"; // Output: 1 (true)
echo $isTeenager; // Output: 2 (false)


// DO WHILE LOOP

$counter = 1;
do {
    echo $counter;
    $counter++;
} while ($counter <= 5);// Output: 12345

echo "<br>";
//WHILE LOOP

$counter = 2;
while ($counter <= 6) {
    echo $counter;
    $counter++;
}// Output: 23456

echo "<br>";

//FOR LOOP

for ($i = 1; $i <= 5; $i++) {
    echo $i;
}// Output: 12345

echo "<br>";

//FOREACH LOOP

$colors = array("rød", "grøn", "blå");
foreach ($colors as $color) {
    echo $color . " ";
}
// Output: rødgrønblå

echo "<br>";
// ARRAY substr
$streng = "Hello, world!";
$subStreng = substr($streng, 7, 5);
echo $subStreng; // Output: world

echo "<br>";

// ARRAY str_replace

$streng = "Hello, world!";
$erstattetStreng = substr_replace($streng, "everyone", 7, 5);
echo $erstattetStreng; // Output: Hello, everyone!

echo "<br>";





?>

