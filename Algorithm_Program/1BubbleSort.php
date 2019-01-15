<?php
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
// PHP program for implementation of Bubble Sort 
require("Utility.php");
try{
$arr = Utility::getIntArr();
$len = count($arr); 
$arr = Utility::bubbleSort($arr); 
}
catch(Throwable $th){
	echo "invalid input try again";
}
echo "Sorted array : \n"; 
for ($i = 0; $i < $len; $i++) 
	echo $arr[$i]." "; 
?> 
