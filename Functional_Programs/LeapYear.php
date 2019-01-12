<?php
/**
 * Checkk year is leap year or not
 */
require ("Utility.php");
 echo "enter year"."\n";
 $yr = Utility::getInt();
 Utility::leapYear($yr);
?>
