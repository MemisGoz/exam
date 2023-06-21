<?php

// Brug af preg_match() til at kontrollere, om en tekststreng indeholder et tal
$text = "HelloD123";
if (preg_match("/\d/", $text)) {
    echo "Tekststrengen indeholder et tal.";
} else {
    echo "Tekststrengen indeholder ikke et tal.";
}

echo "<br>";

//validerer e-mailadresser
$email = "info@example.com";
if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "E-mailadressen er gyldig.";
} else {
    echo "E-mailadressen er ikke gyldig.";
}


echo "<br>";

// validere et mønster

$input = "abc-123";
if (preg_match("/^[a-zA-Z0-9-]+$/", $input)) {
    echo "Mønsteret er gyldigt.";
} else {
    echo "Mønsteret er ikke gyldigt.";
}


?>