<?php
include ("Utility.php");
echo "Enter number of coupon you want:";
$num = Utility::getInt();
Utility::couponNumber($num);
?>