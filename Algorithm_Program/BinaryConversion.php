<?php
//require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
require ("Utility.php");
	// function decToBinary($n) 
	// { 
	// 	$binaryNum = [];
	// 	$j = 0;
	// 	$i = 0; 
	// 	while($n > 0) 
	// 	{ 	
	// 		$binaryNum[$i] = $n % 2; 
	// 		$n = $n / 2; 
	// 		$i++; 
			
	// 	} 
	// 	for( $j = $i - 1; $j >= 0; $j--) {
	// 		echo $binaryNum[$j];   
	// 	}
	    	
	// }
	//decToBinary($n); 

	/**
	 * program to convert decimol to binary
	 */
        echo "Enter the value of N: ";
        $n = Utility2::getInt();
		$d2c = decbin($n)."\n";
		echo $d2c."\n";
?>