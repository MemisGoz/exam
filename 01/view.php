<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Eksempel på dynamisk indhold genereret af PHP
$currentDate = date("d-m-Y");
echo "<p>Den aktuelle dato er: " . $currentDate . "</p>";
?>
<h1>Brugeroplysninger</h1>
  <p>Bruger ID: <?php echo $user['id']; ?></p>
  <p>Navn: <?php echo $user['name']; ?></p>
  <p>E-mail: <?php echo $user['email']; ?></p>
</body>
</html>