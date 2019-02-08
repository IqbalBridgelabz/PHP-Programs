<?php 
/********************************************************************************************
 * Purpose  : A library for reading in 2D arrays of integers, doubles, or booleans from standard input and printing them out to standard output.
 * File Name: TwoDArray.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
//Utility::twoDArray();
echo "1 - Integer: \n";
echo "2 - Double: \n";
echo "3 - Boolean: \n";
echo "4 - Exit: \n";
echo "Enter num value : ";
$num = Utility::getInt();
switch($num){
    case 1: 
    Utility::twoDArrayForInteger();
    break;
    case 2: 
    Utility::twoDArrayForDouble();
    break;
    case 3:
    Utility::twoDArrayForBoolean();
    break;
    case 4: exit();
}
?>