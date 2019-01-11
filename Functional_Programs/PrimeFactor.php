<?php 
require ("Utility.php");
echo " Enter the value:";
$value = Utility::getInt();
Utility::primeFactors($value);
?>