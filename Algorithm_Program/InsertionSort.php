<?php 
/**
 * Reads in strings from standard input and prints them in sorted order.
 */
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility.php");
$arr1 = file_get_contents("String.txt");
$arr2 = explode(" ",$arr1);
$len = count($arr2);
Utility2::insertionSort($arr2, $len); 
echo "Sorted array : "; 
Utility2::printArray($arr2, $len);
?>