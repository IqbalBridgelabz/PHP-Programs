<?php
/********************************************************************************************
* Purpose  : Program to find square root
* File Name: SquareRoot.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
 echo "Enter value of C: ";
 $c = Utility::getInt();
 $sqrt =  Utility::squareRoot($c);
 echo "Square Root of ".$c." is ".$sqrt."\n";
?>
