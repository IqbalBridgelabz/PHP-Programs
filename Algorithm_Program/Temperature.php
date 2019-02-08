<?php
/********************************************************************************************
* Purpose  : Program to convert the temperatue int fahrenheight nad vice versa
* File Name: Temprature.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
echo "enter the value of Celsius: ";
$C = Utility::getInt();
echo "enter the value of Fahrenheit : ";
$F = Utility::getInt();
Utility2::tempConversion($C,$F);
?>