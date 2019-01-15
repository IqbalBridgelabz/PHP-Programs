<?php
class Utility{
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
}
?>