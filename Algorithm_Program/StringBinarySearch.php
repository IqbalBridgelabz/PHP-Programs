<?php 
/********************************************************************************************
* Purpose  : Search a word in a string using binary search 
* File Name: stringBinarySearch.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
echo "Enter String: ";
$str = Utility::getArrayString();
//$str = fopen("text.txt","r") or die ("Unable to open file:");
$arr = explode(" ",$str);
//$start  = round(microtime(true)*1000);
echo " enter search element : ";
$search = Utility::getString(); 
if(Utility::binarySearch($arr, $search) == true) { 
    echo "Search element=>".$search." :Exists in given array. \n"; 
    // $stop = round(microtime(true)*1000);
    // echo " Elapsed time =>".Utility::stopWatch($start,$stop);
} 
else { 
    echo "Search element=> ".$search." :Doesnt Exist in given array."; 
} 
?> 
