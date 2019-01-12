<?php
/**
 * Temperature conversion program
 */
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
echo "enter the value of Celsius: ";
$C = Utility::getInt();
echo "enter the value of Fahrenheit : ";
$F = Utility::getInt();
Utility2::tempConversion($C,$F);
?>