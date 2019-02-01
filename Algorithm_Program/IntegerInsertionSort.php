<?php 
/********************************************************************************************
* Purpose  : Search a number in an array using Insertion sort
* File Name: IntegerInsertionSort.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
// PHP program for insertion sort 
try {
    //code...
    $arr = Utility::getIntArr();
    $n = sizeof($arr); 
    Utility::insertionSort($arr, $n); 
}
catch (Throwable $th) {
    echo " invalid input ";
}
echo "Element after sorting are :";
Utility::printArray($arr, $n); 
?> 
