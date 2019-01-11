<?php

 
require ("Utility.php");
 echo "enter year"."\n";
 $yr = Utility::getInt();
 Utility::leapYear($yr);
 
?>
