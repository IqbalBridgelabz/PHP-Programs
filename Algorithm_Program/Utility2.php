<?php
class Utility2{
/**
 * Temperature Conversion
 */
public static function tempConversion($C,$F){
    $C2F = 0;
    $F2C = 0;
    $C2F = ($GLOBALS['C']* (9/5))+32;
    $F2C = ($GLOBALS['F'] - 32) * (float)(5/9); 
    echo " Celsius to Fahrenheit : ".$C2F."\n ";
    echo "Fahrenheit to Celsius : ".$F2C."\n";
}

// static method for insertion sort
public static function insertionSort(&$arr, $n) 
{ 
	for ($i = 1; $i < $n; $i++) 
	{ 
		$key = $arr[$i]; 
		$j = $i-1; 
	
		// Move elements of arr[0..i-1], 
		// that are greater than key, to 
		// one position ahead of their 
		// current position 
		while ($j >= 0 && $arr[$j] > $key) 
		{ 
			$arr[$j + 1] = $arr[$j]; 
			$j = $j - 1; 
		} 
		
		$arr[$j + 1] = $key; 
	} 
} 

// A function to print an array of size n 
// 
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) {
		echo $arr[$i]." "; 
        //echo "\n"; 
    }
} 

//squre root functio
public static function squareRoot($c){
    $epsilon = 1e-15;    
    $t = $c;              
    while (abs($t - $c/$t) > abs($epsilon*$t)) {
        $t = ($c/$t + $t) / 2.0;
    }
    return $t;
}

// To find Anagram----------------------------------------------
public static function is_anagram($string_1, $string_2) 
    { 
        if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
        return 'Anagram'; 
    else
        return 'Not a anagram';	 
    } 

    // To find PrimeNumber---------------------------------------------
    public static function IsPrime($n)
    {
        for($i=2; $i<$n; $i++)
        {
            $count = 0;
            for($j=1;$j<=$i;$j++){
                if($i % $j==0){
                $count++;
                }
            }
             if($count==2)
	         {
		        echo $i." is a prime Number\n";
		     }
        }
    }
 //Bubble sort--------------------------------------------
 public static function bubbleSort(&$arr) 
 { 
     $n = sizeof($arr); 
 
     // Traverse through all array elements 
     for($i = 0; $i < $n; $i++) 
     { 
         // Last i elements are already in place 
         for ($j = 0; $j < $n - $i - 1; $j++) 
         { 
             // Swap if the element found is greater than the next element
              
             if ($arr[$j] > $arr[$j+1]) 
             { 
                 $t = $arr[$j]; 
                 $arr[$j] = $arr[$j+1]; 
                 $arr[$j+1] = $t; 
             } 
         } 
     } 
     return $arr ;
 } 
  

}
?>