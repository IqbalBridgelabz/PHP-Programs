<?php
/**
 * Given N distinct Coupon Numbers, how many random numbers do you need to generate distinct coupon number? This program simulates this random process.

 */
include ("Utility.php");
echo "Enter number of coupon you want:";
$num = Utility::getInt();
Utility::couponNumber($num);
?>