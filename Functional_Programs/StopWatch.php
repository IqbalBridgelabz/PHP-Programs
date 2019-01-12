<?php 
/**
 * program to find Elapsed Time
 */
require ("Utility.php");
$start  = round(microtime(true)*1000);
echo $start."\n";
sleep(7);
$stop = round(microtime(true)*1000);
echo $stop."\n";              
$result = Utility::stopWatch($start,$stop);
echo "Elapsed Time Between Start and End is : ".$result."\n";
?>