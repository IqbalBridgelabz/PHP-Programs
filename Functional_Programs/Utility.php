<?php 
class Utility{
    // to find power of two of given number upto N.
    public static function power($num){
        for($i = 1;$i<=$num;$i++){
            $pow = pow(2,$i);
            echo "Power of Number is: ".$pow."\n";
        }
    }

    /**
     * @stopWatch program
     */
    public static function stopWatch($start,$stop){
        // $start  = round(microtime(true)*1000);
        // echo $start."\n";
        // sleep(7);
        
        // $stop = round(microtime(true)*1000);
        // echo $stop."\n";
        $elapsedTime =(int)$stop - (int)$start;
        return $elapsedTime;
    }

    // To check Anagram---------------
  
    function anagram($str1,$str2)
    {
        //convert both string into array
        $ar1 = str_split($str1,1);
        $ar2 = str_split($str2,1);
        
        //for anagram size of both string should equal
        if(sizeof($ar1) == sizeof($ar2))
        {
            //forEach to access the value of $ar1 one by one
            foreach($ar1 as $del)
            {
                //check the value in other array and save index
                $index = array_search($del,$ar2);
                //if value is present then it will remove that value from 2nd array
                if($index !== false)
                {
                    unset($ar2[$index]);
                }              
            }
            //after foreach if size is zero then word is anagra else not anagram
            if (sizeof($ar2) == 0) 
            {
                return true;
            } 
            else 
            {
                return false;
            }
        }
        else
        {
            return false;
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

    // To check LeapYear or not
     public static function leapYear($yr) {
        $num = $yr;
        $numLength = strlen((string)$num);
        if($numLength==4){
           if(($yr%400==0)|| ($yr%4==0) && ($yr%100!=0)){
               echo $yr." is leap year\n";
           }
           else{
            echo $yr." is not leap year";
           }
        }
        else{
            echo "Enter Valid Year:\n";
            $year=Utility::getInt();
            Utility::leapYear($year);
        }
    }



    // To find Heads or Tails
    public static function coinFlips($val){
    $loopCount = 0;
    $heads = 0;
    $tails = 0;
    while($loopCount<$val){
     $result = (mt_rand(0,1));
        if($result<.5){
            $tails =  $tails+1;
        }
        else{
         $heads = $heads+1;
        }
     $loopCount = $loopCount+1;
    }
    
    $perHeads = ($heads*100)/$val;
    $perTails = ($tails*100)/$val;
    echo "Tails % is ".$perTails."\n";
    echo "Heads % is ".$perHeads."\n";
    }

    // To find prime factor of a given number
    public static function primeFactors($value){
       
            for($i = 2; $i<=$value; $i++){
               
               while($value % $i ==0){
                    echo $i."\n";
                    $value = $value/$i;
                }
                
            }
        
    }


    // For Gambler problem
    public static function gambler($stake,$goal,$trials){
        $bet = 0;
        $win = 0;
       
        for($t=0; $t<$trials; $t++){
            $cash=$stake;
            
            while($cash> 0 && $cash<=$goal){
                $bet++;
                if(mt_rand(0,1)<0.5){
                   
                    $cash=$cash+1;
                }
                else{
                    $cash=$cash-1;
                }  
                
            }
            if($cash==$goal){
                $win++;
            }
             
        }
        $wins = (100.0*$win)/$trials;
        echo "\n % of Game win = ".$wins;
        $loss = 100.0-$wins;
        echo "% Game loss = ".$loss."\n";        
        echo "Average bet= ".(1.0*$bet)/$trials."\n";
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


//To find sum of three int adds to zero
public static function findTriplets($arr, $n) { 
    $found = true; 
    for ($i = 0; $i < $n - 2; $i++) 
    { 
        for ($j = $i + 1; $j < $n - 1; $j++) 
        { 
            for ($k = $j + 1; $k < $n; $k++) 
            { 
                if ($arr[$i] + $arr[$j] +  $arr[$k] == 0) 
                               
                { 
                    echo "Triplets Number sum equal to zero are :".$arr[$i] , " ", 
                         $arr[$j] , " ", 
                         $arr[$k] ,"\n"; 
                    $found = true; 
                } 
            } 
        } 
    }     
    if ($found == false) 
        echo " not exist ", "\n"; 
  
} 
//Euclidean Distance
public static function euclidean($x, $y)
{
    return sqrt($x*$x + $y*$y);
}
//To find Permutation 
public static function permute($str, $l, $r) 
{ 
	if ($l == $r) 
		echo $str. "\n"; 
	else
	{ 
		for ($i = $l; $i <= $r; $i++) 
		{ 
			$str = Utility::swap($str, $l, $i); 
			Utility::permute($str, $l + 1, $r); 
			$str = Utility::swap($str, $l, $i); 
		} 
	} 
} 

// To swap value

public static function swap($a, $i, $j) 
{ 
	$temp; 
	$charArray = str_split($a); 
	$temp = $charArray[$i] ; 
	$charArray[$i] = $charArray[$j]; 
	$charArray[$j] = $temp; 
    return implode($charArray); 
} 

/**
 * Quadratic Equation
 * 
 * @var Integer
 * @return null
 */
public static function quadratic($a,$b,$c){
    if ($a===0){
        echo "Invalid result: ";
        return;
    }
    $d = $b*$b - 4*$a*$c;
    $result = sqrt(abs($d));
    if($result>0){
        echo " The roots are real and different \n";
        echo " Positive value of given root is: ".(-$b+$result)/ (2*$a)."\n"." Negative value of given root is: ".
             (-$b-$result)/ (2*$a)."\n";
       
    }
    else if($d == 0){
        echo "Roots are real and same:\n";
        echo -$b / (2* $a);
    }
    else{
        echo "Roots are complex \n";
        echo -$b / (2 *$a)."+i".$result."\n". -$b / (2 * $a)."-i".$result."\n";
    }
}



// To find Anagram
public static function is_anagram($string_1, $string_2) 
    { 
        if (count_chars($string_1, 1) == count_chars($string_2, 1)) 
        return 'Anagram'; 
    else
        return 'Not a anagram';	 
    } 

    // To find PrimeNumber
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



    // String Replace --------------------
    public static function stringReplace($search,$str1){
        // echo "enter replace string:";
        // $rep = Utility::getString();
        // return str_replace($rep,$search,$str1);
        return str_replace("name",$search,$str1);
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

// Coupon Number-----------------------------------------------
public static function couponNumber($n){
       
        //array to save the coupon
        $arr = array();
        
        //count to count the number of thime rendom number generated
        $count = 0;
        //index to change the index of array
        $index = 0;
        //while loop until use get n number of coupon
        while(sizeof($arr) != $n)
        {
            $count++;
            $num = random_int(10,($n+100));
            //if condition to check the coupon use unique or not
            if(!array_search("coupon ".$num,$arr))
            {
                $arr[$index++] = ("coupon : ".$num);
            }
        }
        //no of time coupon generated
        echo "count =>".$count."\n";
        //unique coupon
        foreach($arr as $print) {
            echo $print."\n";  
        }
}

}
?>