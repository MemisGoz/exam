<?php
// Numerically indexed arrays
$frugter = array("æble", "banan", "appelsin");
echo $frugter[0]; // æble

echo "<br>";
// associative array
$person = array("navn" => "John", "alder" => 25, "by" => "København");


//multi-dimensional array
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
//
foreach ($frugter as $frugt) {
    echo $frugt . " ";
}

echo "<br>";
// array_map()
function double($n) {
    return $n * 2;
}

$numbers = array(1, 2, 3, 4, 5);
$result = array_map("double", $numbers);

var_dump($result);

echo "<br>";
// usort()
function compareLength($a, $b) {
    return strlen($a) - strlen($b);
}

$fruits = array("banan", "æble", "appelsin", "pære");
usort($fruits, "compareLength");

var_dump($fruits);

echo "<br>";
// sort()
$numbers = array(5, 3, 1, 4, 2);
sort($numbers);

var_dump($numbers);

echo "<br>";
// shuffle()
$cards = array("hjerter", "ruder", "spar", "klør");
shuffle($cards);

var_dump($cards);

echo "<br>";
// explode()
$address = "Sankt Hans Gade 10, 2. sal, 2200 København N";
$parts = explode(", ", $address);

var_dump($parts);

echo "<br>";

// extract()
$person = array(
    "navn" => "John",
    "alder" => 25,
    "by" => "København"
);

extract($person);

echo $navn; 
echo $alder; 
echo $by; 

echo "<br>";
// compact()
$navn = "Peter";
$alder = 30;
$by = "Aarhus";

$data = compact("navn", "alder", "by");

var_dump($data);

echo "<br>";
// reset()
$fruits = array("æble", "banan", "appelsin");
$firstFruit = reset($fruits);

echo $firstFruit; 

echo "<br>";
// end()

$fruits = array("æble", "banan", "appelsin");
$lastFruit = end($fruits);

echo $lastFruit; 

?>