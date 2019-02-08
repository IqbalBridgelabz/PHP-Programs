<?php
/********************************************************************************************
 * Purpose  : This program takes a command-line argument N and prints a table of the powers of 2 
 *            that are less than or equal to 2^N. 
 * File Name: PowerOf2.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
echo "Enter Number:";
$num = Utility::getInt();
while($num>31 || $num===0){
    echo "Enter valid input:";
    $num = Utility::getInt();
}
Utility::power($num);
?>