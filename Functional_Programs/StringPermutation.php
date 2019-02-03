<?php 
/********************************************************************************************
 * Purpose  : To find the permutation of String
 * File Name: StringPermutation.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/

require ("Utility.php");
echo " Enter Sting: ";
$str = Utility::getString(); 
$n = strlen($str); 
Utility::permute($str, 0, $n - 1); 
?> 
