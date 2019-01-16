<?php 
/**  Bubble sort program for word search */
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility.php");

// Read data from file

$str1 = file_get_contents("String.txt");
$str3 = explode(" ",$str1);
Utility::stringSearch($str3);


/**
 * To take string from command
 */
// echo " Enter string : ";
// $str = Utility::getArrayString();
// $arr = explode(" ",$str);
//Utility2::stringSearch($arr);
?>