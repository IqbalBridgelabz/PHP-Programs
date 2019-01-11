<?php
    //Anagram Program

    require ("/iqbal/Functional_Programs/Utility.php");
    echo "Enter first string: ";
    $str  = Utility::getString();
    echo "Enter second string: ";
    $str2  = Utility::getString();
    $res = Utility::is_anagram($str , $str2); 
    echo $res;

?> 