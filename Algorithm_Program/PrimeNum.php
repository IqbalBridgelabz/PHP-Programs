<?php
/********************************************************************************************
* Purpose  : program to print prime number
* File Name: PrimeNum.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
echo "Enter the value : ";
$num = Utility::getInt();
$prime = Utility::IsPrime($num);
echo $prime;
?>
 
  


