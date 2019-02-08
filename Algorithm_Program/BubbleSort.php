<?php 
/********************************************************************************************
* Purpose  : Search a number in an array using Bubble sort
* File Name: BubbleSort.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
$arr1 = file_get_contents("Integer.txt");
$arr2 = explode(" ",$arr1);
$len = count($arr2);
$arr = Utility::bubbleSort($arr2); 
echo "Sorted array : \n"; 
for ($i = 0; $i < $len; $i++) 
	echo $arr[$i]." "; 
?>