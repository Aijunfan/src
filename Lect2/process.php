<?php
$title = "Your information";
include 'header.php';

$nimi = $_POST["nimi"];
$email = $_POST["email"];

echo "<h3>Hello " . $nimi . "<br>Your email is: " . $email;

include 'footer.php';

?>