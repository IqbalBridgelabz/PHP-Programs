<?php 
/********************************************************************************************
* Purpose  : Search a word in a string using Insertion sort
* File Name: StringInsertionSort.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
$arr1 = file_get_contents("String.txt");
$arr2 = explode(" ",$arr1);
$len = count($arr2);
Utility2::insertionSort($arr2, $len); 
echo "Sorted array : "; 
Utility2::printArray($arr2, $len);
?>