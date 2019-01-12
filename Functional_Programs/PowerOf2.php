<?php
require ("Utility.php");
echo "Enter Number:";
$num = Utility::getInt();
while($num>31 || $num===0){
    echo "Enter valid input:";
    $num = Utility::getInt();
}
Utility::power($num);
?>