<?php 
/********************************************************************************************
 * Purpose  : Write a program WindChill.java that takes two double command-line arguments t and v and prints the wind chill.
 * File Name: TwoDArray.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
echo " Enter Temperature Value: ";
$t = Utility::getFloat();
echo " Enter wind speed  Value: ";
$v = Utility::getFloat();
$w = 35.74+0.6215+(0.4275*$t)*pow($v,0.16);
echo "The wind chill valus is : ".$w;
?>