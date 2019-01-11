<?php
require ("Utility.php");
echo "Enter Number:";
$num = Utility::getInt();
while($num>31 || $num===0){
    echo "Enter valid input:";
    $num = Utility::getInt();
}
power($num);
function power($num){
    for($i = 1;$i<=$num;$i++){
        $pow = pow(2,$i);
        echo "Power of Number is: ".$pow."\n";
    }
}
?>