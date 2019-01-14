<?php
/**
 * To the Util Class add dayOfWeek static function that takes a date as input and prints the day of the week that date falls on. Your program should take three command-line arguments: m (month), d (day), and y (year). For m use 1 for January, 2 for February, and so forth. For output print 0 for Sunday, 1 for Monday, 2 for Tuesday, and so forth
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
echo "Day on given date is :" . $day[$d0] . "\n";
?>