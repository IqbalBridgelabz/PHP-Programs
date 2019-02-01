<?php  
/********************************************************************************************
* Purpose  : Program to convert decimol to binary 
* File Name: toBinary.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require ("Utility.php");
echo "Enter number: ";
$num = Utility::getInt();
echo "Binary no is  : ".toBin($num)."\n";
function toBin($num){
    $bin = "";
    while ($num>=1){
    $bin = ($num % 2).$bin;
    $num = round($num/2, 0, PHP_ROUND_HALF_DOWN);
    }
return $bin;
}

// function to Swap two nibbles in a byte in php program 
function swapNibbles($x) 
{ 
	return ( ($x & 0x0F) << 4 | 
		($x & 0xF0) >> 4 ); 
} 
$x = $num; 
echo "New number after Nibbles logic : ".swapNibbles($x)."\n"; 


// PHP Program to find whether a no is power of two
//Function to check Log base 2 
function Log2($n) 
{ 
	return (log10($n) / 
			log10(2)); 
} 
// Function to check if x is power of 2 
function isPowerOfTwo($x) 
{ 
	return (ceil(Log2($x)) == 
			floor(Log2($x))); 
} 
if(isPowerOfTwo($x)) 
echo $x." is a power of 2 \n"; 
else
echo $x." is not a power of 2 \n"; 
?> 

