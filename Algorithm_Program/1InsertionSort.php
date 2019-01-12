<?php 
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
// PHP program for insertion sort 
try {
    //code...
    $arr = Utility::getIntArr();
    $n = sizeof($arr); 
    Utility2::insertionSort($arr, $n); 
} catch (\Throwable $th) {
    echo " invalid input ";
}
echo "Element after sorting are :";
Utility2::printArray($arr, $n); 
?> 
