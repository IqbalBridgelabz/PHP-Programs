<?php
/**
 * Flip Coin and print percentage of Heads and Tails
 */
require ("Utility.php");
echo "enter the val : " ;
$val = Utility::getInt();
Utility::coinFlips($val);
?>