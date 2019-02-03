<?php
/********************************************************************************************
 * Purpose  : Prints the check leap year    
 * File Name: LeapYear.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
 echo "enter year"."\n";
 $yr = Utility::getInt();
 Utility::leapYear($yr);
?>
