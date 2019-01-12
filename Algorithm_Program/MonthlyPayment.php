<?php
/**
 * Program to calculate monthly payment 
 */
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
echo "Enter year :";
$y = Utility::getInt();
echo "Enter Amount : ";
$r = Utility::getInt();
echo "Enter Principal Loan : ";
$p = Utility::getInt();
Utility2::monthlyPayment($y,$r,$p);
?>