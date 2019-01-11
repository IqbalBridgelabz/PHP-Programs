<?php
require ("/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
	function decToBinary($n) 
	{ 
		$binaryNum = [];
		$j = 0;
		$i = 0; 
		while($n > 0) 
		{ 	
			$binaryNum[$i] = $n % 2; 
			$n = $n / 2; 
			$i++; 
		} 
		for( $j = $i - 1; $j >= 0; $j--) 

			echo $binaryNum[$j];   
	 
    }
        echo "Enter the value of N: ";
        $n = Utility::getInt();
		decToBinary($n); 

?>