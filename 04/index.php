<?php
// session

session_start();
$_SESSION['brugernavn'] = 'Marcel'; // Gemmer en værdi i sessionen


echo $_SESSION['brugernavn'] . '<br>'; 



//session_destroy(); // Sletter sessionen
//cookie
setcookie('brugernavn', 'Memis', time() + 3600, httponly:true ) ; // Opretter en cookie

echo $_COOKIE['brugernavn']; 



?>
