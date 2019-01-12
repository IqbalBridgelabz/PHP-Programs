<?php
/**
 * Euclidean distance progrma
 */
require ("Utility.php");
echo "Enter first Value : ";
$first = Utility::getInt();
echo "Enter second Value : ";
$second = Utility::getInt();
$result = Utility::euclidean($first,$second);
echo "Distanc from(".$first.",".$second.") to (0,0) = ".$result."\n";
?>