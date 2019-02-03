<?php
/********************************************************************************************
 * Purpose  :  Given N distinct Coupon Numbers, 
 *             how many random numbers do you need to generate distinct coupon number? 
 *             This program simulates this random process.     
 * File Name: Coupon.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
include ("Utility.php");
echo "Enter number of coupon you want:";
$num = Utility::getInt();
Utility::couponNumber($num);
?>