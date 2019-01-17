<?php
class Utility{
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
//2D array for integer
function twoDArrayForInteger()
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
            $prime = Utility::IsPrime($arr[$i][$j]);
            //echo $arr[$i][$j]." ";
        }
        echo "\n";
    }
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
              return $i;
             //echo $i." is a prime Number\n";
          }
     }
 }


    //print day
    public static function printDay($d,$m,$y)
    {
        
        $y0 = $y - (int)((14 - $m) / 12);
        $x = $y0 + (int)($y0/4) - (int)($y0/100) + (int)($y0/400);
        $m0 = $m + 12 * (int)((14 - $m) / 12) - 2;
        $d0 = ($d + $x + (int)((31*$m0) / 12)) % 7;
        return $d0;
    }


// leap year
public static function leapYear($yr) {
    $num = $yr;
    $numLength = strlen((string)$num);
    if($numLength==4){
        if(($yr%400==0)|| ($yr%4==0) && ($yr%100!=0)){
            echo " ".$yr." is leap year\n\n";
        }
        else{
        echo " ".$yr." is not leap year\n\n";
        }
    }
    else{
        echo "Enter Valid Year:\n";
        $year=Utility::getInt();
        Utility::leapYear($year);
    }
}


//Function to check for integer Palindrome 
public static function Palindrome($number){   
    $temp = $number;   
    $new = 0;   
    while (floor($temp)) {   
        $d = $temp % 10;   
        $new = $new * 10 + $d;   
        $temp = $temp/10;   
    }   
    if ($new == $number){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
}   
// Function to check for string Palindrome 
public static function stringPalindrome($string){   
    if (strrev($string) == $string){   
        return 1;   
    } 
    else{ 
        return 0; 
    } 
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
// read file
 public static function readFl($file)
 {
     $fileC = fopen($file,"r") or die("unable to open");
     return fread($fileC, filesize($file));
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
//  //To get int array
//  static function getIntArr(){
//     echo "enter array size : ";
//     $size = Utility::getInt();
//     $arr = [];
//     echo "enter array value : ";
//     for($i = 0 ; $i < $size ; $i++ ){
//         $arr[$i] = trim(fgets(STDIN)); 
//     }
//     return $arr ;
// }


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
}
?>