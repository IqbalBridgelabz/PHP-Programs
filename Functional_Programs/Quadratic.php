<?php
/**
 * Write a program Quadratic.java to find the roots of the equation a*x*x + b*x + c. Since the equation is x*x, hence there are 2 roots.
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