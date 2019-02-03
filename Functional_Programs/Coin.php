<?php
/********************************************************************************************
 * Purpose  :Flip Coin and print percentage of Heads and Tails            
 * File Name: Coin.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
echo "enter the val : " ;
$val = Utility::getInt();
Utility::coinFlips($val);
?>