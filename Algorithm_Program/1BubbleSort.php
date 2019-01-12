<?php
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
// PHP program for implementation of Bubble Sort 
$arr = Utility::getIntArr();
$len = count($arr); 
$arr = Utility::bubbleSort($arr); 
echo "Sorted array : \n"; 
for ($i = 0; $i < $len; $i++) 
	echo $arr[$i]." "; 
?> 
