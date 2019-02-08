<?php
/********************************************************************************************
* Purpose  : Program to find day of the week
* File Name: BubbleSort.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require("Utility.php");
echo "Enter day : ";
$d = Utility::getInt();
echo "Enter month : ";
$m = Utility::getInt();
echo "Enter year : ";
$y = Utility::getInt();
//calculating the day of week 
$d0 = Utility::dayOfWeek($d, $m, $y);
//prints the day week
$d1 = "Sunday Monday Tuesday Wednesday Thursday Friday Saturday";
$day = explode(" ", $d1);
echo "Day on given date is :" . $day[$d0] . "\n";
?>