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
public static function printArray(&$arr, $n) 
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
  
//To reverse String
public static function revSting($str){
    return strrev($str);
 }


 //To get Strings
 public static function getString(){
     fscanf(STDIN,"%s\n",$val);
     while(!is_string($val)){
         echo "Invalid input Try again: ";
         fscanf(STDIN,"%s\n",$val);
     }
     return $val;
 } 
 //To get Strings array
 public static function getArrayString(){
     return trim(fgets(STDIN));
 } 

 public static function getBoolean(){
     fscanf(STDIN,"%s\n",$val);
     while($val!=='t' && $val!=='f'){
         echo "ivalid input try again\n";
         fscanf(STDIN," %s\n ",$val);
     }
     return $val;
     
 }

 // To get double value
 public static function getDouble(){
     fscanf(STDIN,"%f\n",$val);
     while(!is_float($val)){
         echo "ivalid input try again\n";
         fscanf(STDIN," %f\n ",$val);
     }
     return $val;
     
 }



 //To get Float Value
 public static function getFloat(){
     fscanf(STDIN,"%f\n",$val);
     while(!is_float($val)){
         echo "ivalid input try again\n";
         fscanf(STDIN," %f\n ",$val);
     }
     return $val;
     
 }

 //To take integer
 public static function getInt(){
     fscanf(STDIN,"%s\n",$val);
     if($val==0){
         while( !is_numeric($val)){
             echo "ivalid input try again\n";
             fscanf(STDIN," %s\n ",$val);
         }
     return $val;
     }
     else{
         while( !is_numeric($val) || $val/(int)$val>1){
             echo "ivalid input try again\n";
             fscanf(STDIN," %s\n ",$val);
         }
     return (int)$val;
     }
 }
 //To get int array
 static function getIntArr(){
    echo "enter array size : ";
    $size = Utility::getInt();
    $arr = [];
    echo "enter array value : ";
    for($i = 0 ; $i < $size ; $i++ ){
        $arr[$i] = trim(fgets(STDIN)); 
    }
    return $arr ;
}


//Two dimensional Array
public static function twoDArray()
{
    echo "enter row size"."\n";
    $m = Utility::getInt();
    echo "enter colums size"."\n";
    $n = Utility::getInt();
    $arr = array();
    echo "enter valus"."\n";
    for($i = 0;$i < $m; $i++)
    {
        $iArr = array();
        for($j = 0; $j < $n ;$j++ )
        {
            $iArr[$j] = trim(fgets(STDIN));
        } 
        array_push($arr,$iArr);
    }
    for($i = 0;$i < $m; $i++)
    {
        for($j = 0; $j < $n ;$j++ )
        {
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }
}



// 2D array for integer

public static function twoDArrayForInteger()
{
    echo "enter row size"."\n";
    $m = Utility::getInt();
    echo "enter colums size"."\n";
    $n = Utility::getInt();
    $arr = array();
    echo "enter valus"."\n";
    for($i = 0;$i < $m; $i++)
    {
        $iArr = array();
        for($j = 0; $j < $n ;$j++ )
        {
            $iArr[$j] = trim(fgets(STDIN));
        } 
        array_push($arr,$iArr);
    }
    for($i = 0;$i < $m; $i++)
    {
        for($j = 0; $j < $n ;$j++ )
        {
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }
}


// 2D array for double
public static function twoDArrayForDouble()
{
    echo "enter row size"."\n";
    $m = Utility::getInt();
    echo "enter colums size"."\n";
    $n = Utility::getInt();
    $arr = array();
    echo "enter valus"."\n";
    for($i = 0;$i < $m; $i++)
    {
        $iArr = array();
        for($j = 0; $j < $n ;$j++ )
        {
            $iArr[$j] = Utility::getDouble();
        } 
        array_push($arr,$iArr);
    }
    for($i = 0;$i < $m; $i++)
    {
        for($j = 0; $j < $n ;$j++ )
        {
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }
}


// 2D array for boolean
public static function twoDArrayForBoolean()
{
    echo "enter row size"."\n";
    $m = Utility::getInt();
    echo "enter colums size"."\n";
    $n = Utility::getInt();
    $arr = array();
    echo "enter valus"."\n";
    for($i = 0;$i < $m; $i++)
    {
        $iArr = array();
        for($j = 0; $j < $n ;$j++ )
        {
            $iArr[$j] = Utility::getBoolean();
        } 
        array_push($arr,$iArr);
    }
    for($i = 0;$i < $m; $i++)
    {
        for($j = 0; $j < $n ;$j++ )
        {
            echo $arr[$i][$j]." ";
        }
        echo "\n";
    }
}
//Bubble sort logic for string search
public static function stringSearch($str){
    $n = count($str);
    for($i=0;$i<$n;$i++){
        for($j=0; $j<$n-1-$i;$j++){
            if((strcmp($str[$j],$str[$j+1])>0)){
                $temp = $str[$j];
                $str[$j] = $str[$j+1];
                $str[$j+1] = $temp;
            }
        }
    }  
    echo " Sorted string: ";
    for($i=0;$i<$n;$i++){
        echo $str[$i]." ";
    } 
    echo "\n";
}

// to calculate monthly payment
public static function monthlyPayment($y,$r,$p){
    $n = 12 * $y;
    $R = $r / (12 *100);
    $payment = ($p * $R) / (1 - pow((1+$R),-$n));
    echo "Monthly Payment ".$payment."\n";
}
}
?>