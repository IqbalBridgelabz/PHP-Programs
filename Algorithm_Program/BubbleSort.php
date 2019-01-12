<?php 
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
$arr1 = file_get_contents("Integer.txt");
$arr2 = explode(" ",$arr1);
$len = count($arr2);
$arr = Utility::bubbleSort($arr2); 
echo "Sorted array : \n"; 
for ($i = 0; $i < $len; $i++) 
	echo $arr[$i]." "; 
?>