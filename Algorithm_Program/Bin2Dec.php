<?php
/********************************************************************************************
* Purpose  : Program to convert binary to decimol 
* File Name: toBinary.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
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