<?php 
require ("/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
// PHP program for insertion sort 

$arr = Utility::getIntArr();
$n = sizeof($arr); 
Utility2::insertionSort($arr, $n); 
echo "Element after sorting are :";
Utility2::printArray($arr, $n); 

?> 
