<?php 
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
$arr1 = file_get_contents("String.txt");
$arr2 = explode(" ",$arr1);
$len = count($arr2);
$arr = Utility2::insertionSort($arr2, $len); 
echo "Sorted array : \n"; 
Utility2::printArray($arr, $len);
// for ($i = 0; $i < $len; $i++) 
// 	echo $arr[$i]." "; 
?>