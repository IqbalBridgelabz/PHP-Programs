<?php
require ("Utility.php");
echo " Enter Temperature Value: ";
$t = Utility::getFloat();
echo " Enter wind speed  Value: ";
$v = Utility::getFloat();
$w = 35.74+0.6215+(0.4275*$t)*pow($v,0.16);
echo "The wind chill valus is : ".$w;
?>