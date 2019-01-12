<?php
/**
 * To find Square root
 */
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
 echo "Enter value of C: ";
 $c = Utility::getInt();
 $sqrt =  Utility2::squareRoot($c);
 echo "Square Root of ".$c." is ".$sqrt."\n";
?>
