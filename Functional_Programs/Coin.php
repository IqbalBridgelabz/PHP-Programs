<?php
/**
 * To find No.of heads and tails
 */
require ("Utility.php");
echo "enter the val : " ;
$val = Utility::getInt();
Utility::coinFlips($val);
?>