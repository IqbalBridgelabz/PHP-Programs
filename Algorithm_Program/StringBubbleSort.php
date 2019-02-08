<?php 
/********************************************************************************************
* Purpose  : Search a word in a string using bubble sort
* File Name: StringBubbleSort.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");

$str1 = file_get_contents("String.txt");
$str3 = explode(" ",$str1);
Utility::stringSearch($str3);

?>