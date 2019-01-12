<?php
/**
 * Quadratic equation program
 */
require ("Utility.php");
echo " Enter the Value of A: ";
$a = Utility::getInt();
echo " Enter the Value of B: ";
$b = Utility::getInt();
echo " Enter the Value of C: ";
$c = Utility::getInt();
Utility::quadratic($a,$b,$c);
?>