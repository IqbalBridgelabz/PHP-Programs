<?php
/**
 * Program to find Day of weak
 */
require("Utility.php");
echo "Enter day : ";
$d = Utility::getInt();
echo "Enter month : ";
$m = Utility::getInt();
echo "Enter year : ";
$y = Utility::getInt();
//calculating the day of week 
$d0 = Utility::dayOfWeek($d, $m, $y);
//prints the day week
$d1 = "Sunday Monday Tuesday Wednesday Thursday Friday Saturday";
$day = explode(" ", $d1);
echo "day on given date is :" . $day[$d0] . "\n";
?>