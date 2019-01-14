<?php
/**
 * One string is an anagram of another if the second is simply a rearrangement of the first. For example, 'heart' and 'earth' are anagrams...
 */
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
    require ("Utility.php");
    echo "Enter first string: ";
    $str  = Utility::getString();
    echo "Enter second string: ";
    $str2  = Utility::getString();
    $res = Utility::is_anagram($str , $str2); 
    echo $res;

?> 