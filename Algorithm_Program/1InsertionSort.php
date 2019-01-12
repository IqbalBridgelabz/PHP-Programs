<?php 
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility.php");
// PHP program for insertion sort 
//try {
    //code...
    $arr = Utility::getIntArr();
    $n = sizeof($arr); 
    Utility::insertionSort($arr, $n); 
//} catch (\Throwable $th) {
   // echo " invalid input ";
//}
echo "Element after sorting are :";
Utility::printArray($arr, $n); 
?> 
