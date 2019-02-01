<?php
/**
 * Read in a list of words from File. Then prompt the user to enter a word to search the list. 
 * The program reports if the search word is found in the list. 
 */
require ("Utility.php");
$str = file_get_contents("String.txt");
$str1 = explode(" ",$str);
$n = sizeof($str1); 
Utility2::insertionSort($str1, $n); 
Utility2::printArray($str1, $n);
echo "Enter search element:";
$search = Utility2::getString();
$str2 = Utility2::insertionSort($str, $n); 
if(Utility2::binarySearch($str1, $search) == true) { 
    echo "Search element=> ".$search." :Exists in given array. \n"; 
} 
else { 
    echo "Search element=> ".$search." :Doesnt Exist in given array."; 
} 

?>