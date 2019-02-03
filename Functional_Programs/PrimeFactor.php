<?php 
/********************************************************************************************
 * Purpose  : To find prime factor of given number
 * File Name: PowerOf2.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
echo " Enter the value:";
$value = Utility::getInt();
Utility::primeFactors($value);
?>