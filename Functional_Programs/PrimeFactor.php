<?php 
/**
 * To find prime factor of given number
 */
require ("Utility.php");
echo " Enter the value:";
$value = Utility::getInt();
Utility::primeFactors($value);
?>