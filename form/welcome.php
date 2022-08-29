<?php

print_r($_GET);
echo " <br> <br>";

$name = $_GET["name"];
$age = $_GET["age"];
if($age < 18) echo "SORRY! $name, you are under 18!";
else echo "Welcome $name";

?>