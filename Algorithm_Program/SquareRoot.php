<?php
/**
 * To find Square root
 */
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility.php");
 echo "Enter value of C: ";
 $c = Utility::getInt();
 $sqrt =  Utility::squareRoot($c);
 echo "Square Root of ".$c." is ".$sqrt."\n";
?>
