<?php
/********************************************************************************************
* Purpose  : Program to count monthly payment 
* File Name: MonthlyPayment.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 18/01/2019
********************************************************************************************/
require ("Utility.php");
echo "Enter year :";
$y = Utility::getInt();
echo "Enter Amount : ";
$r = Utility::getInt();
echo "Enter Principal Loan : ";
$p = Utility::getInt();
Utility2::monthlyPayment($y,$r,$p);
?>