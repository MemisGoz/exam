<?php

// urlencode function
echo urlencode("http://localhost/exam/03/index.php") . "<br>";    


//parse_url function
$url = "http://localhost/exam/03/index.php";
$opdeling = parse_url($url);
echo "Stien: " . $opdeling['path'];  

echo "<br>";

// filter_var function
$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "E-mail-adressen er gyldig.";
} else {
  echo "E-mail-adressen er ugyldig.";
}

echo "<br>";
?>



<?php
// GET method
// URL: http://localhost/exam/03/?bil=BMW&model=i25



//$bil = $_REQUEST['bil'];
//$model = $_REQUEST['model'];
/*
$bil = $_GET['bil'];
$model = $_GET['model'];

echo "Din, $bil! er $model .";
echo "<br>";
*/

?>





<?php
//POST method and htmlspecialchars
//$navn = $_REQUEST['navn'];  
$navn = $_POST['navn'];
$escaped_navn = htmlspecialchars($navn);
echo "Du indsendte navnet: $escaped_navn";

echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
  <label for="navn">Navn:</label>
  <input type="text" id="navn" name="navn">
  <input type="submit" value="Send">
</form>
</body>
</html>


<?php
$server_navn = $_SERVER['SERVER_NAME'];
$anmodet_url = $_SERVER['PHP_SELF'];

echo "Du besøger serveren: $server_navn <br>";
echo "Du anmodede om URL'en: $anmodet_url";

?>