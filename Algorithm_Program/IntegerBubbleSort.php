<?php
/********************************************************************************************
* Purpose  : Search a number in an array using Bubble sort
* File Name: IntegerBubbleSort.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require("Utility.php");
try{
$arr = Utility::getIntArr();
$len = count($arr); 
$arr = Utility::bubbleSort($arr); 
}
catch(Throwable $th){
	echo "invalid input try again";
}
echo "Sorted array : \n"; 
for ($i = 0; $i < $len; $i++) 
	echo $arr[$i]." "; 
?> 
