<?php 
/********************************************************************************************
 * Purpose  : To find Quadratic Roots of given value
 * File Name: Quadratic.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
echo " Enter the Value of A: ";
$a = Utility::getInt();
echo " Enter the Value of B: ";
$b = Utility::getInt();
echo " Enter the Value of C: ";
$c = Utility::getInt();
Utility::quadratic($a,$b,$c);
?>