<?php
$num = $_GET['number'];
$count=0;
for($i=1;$i<=$num;$i++)
{
    if($num%$i == 0) $count++;
}
if($count==2){
    echo "Prime Number";
}else{
    echo "Not a Prime Number";
}