<?php
require ("Utility.php");
/**
 * function to convert binary to decimal 
 */
echo "Enter Number : ";
$num = Utility::getInt();
binToDec($num);
function binToDec($bin){
$binArr = str_split($bin);
$dec = 0 ;
$j = 0 ;
for ($i=count($binArr)-1 ; $i >= 0 ; $i--) { 
	if($binArr[$i] == 1){
		$dec = $dec +  2**$j ;
	}
	$j++;
}
echo "Decimol nuber for given binary is : ".$dec."\n";
//return $dec."\n";
}
?>