<?php

//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility.php");
//PHP program for insertion sort for string 
echo "Enter String : ";
$str = Utility::getArrayString();
$arr = explode(" ",$str);
$n = sizeof($arr); 
Utility2::insertionSort($arr, $n); 
echo "Sorted srting: ";
Utility2::printArray($arr, $n); 

// // To data from file
// $str= fopen("String.txt", "r") or die("Unable to open file!");
// $str1 = fread($str,filesize("String.txt"));
// $str3 = explode(" ",$str1);
// $n = sizeof($str3); 
// Utility2::insertionSort($str3, $n); 
// echo "Element after sorting are :";
// Utility2::printArray($arr, $n); 
// fclose($str);
?> 

