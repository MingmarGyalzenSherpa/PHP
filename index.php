<!DOCTYPE html>
<html>
<body>

<?php
$name = array("Mingmar","Gyalzen","Sherpa");
$firstName = "Mingmar";
$middleName = "Gyalzen";
$lastName = "Sherpa";
echo "Hello World, I am ";
foreach($name as $word){
    if($word == $name[2]) echo "$word.";
    else  echo "$word ";
    
}
?> 

</body>
</html>