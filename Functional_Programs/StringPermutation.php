<?php 
//To find the permutation of String
require ("Utility.php");
echo " Enter Sting: ";
$str = Utility::getString(); 
$n = strlen($str); 
Utility::permute($str, 0, $n - 1); 
?> 
