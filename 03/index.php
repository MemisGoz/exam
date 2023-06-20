<?php








// filter_var
$email = "john.doe@example.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "E-mail-adressen er gyldig.";
} else {
  echo "E-mail-adressen er ugyldig.";
}

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