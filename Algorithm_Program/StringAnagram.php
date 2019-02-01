<?php
/********************************************************************************************
* Purpose  : Program to check whether string is anagram or not 
* File Name: StringAnagram.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 19/01/2019
********************************************************************************************/
    require ("Utility.php");
    echo "Enter first string: ";
    $str  = Utility::getString();
    echo "Enter second string: ";
    $str2  = Utility::getString();
    $res = Utility::is_anagram($str , $str2); 
    echo $res;

?> 