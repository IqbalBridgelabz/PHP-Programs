<?php
/********************************************************************************************
* Purpose  : Extend the Prime Number Program and store only the numbers in that range that are Anagrams.
             For e.g. 17 and 71 are both Prime and Anagrams in the 0 to 1000 range. 
             Further store in a 2D Array the numbers that are Anagram and numbers that are not Anagram
* File Name: StackAnagram.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require("Utility.php");
require("Stack.php");
/**
 * Function to run the Program and test
 */
function stackAna(){
    $stack = new Stack();
    //getting prime number
    $arr = getprime(1000);
    //checking prime numbers which are anagrams
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=0; $j < count($arr); $j++) { 
            if($i!=$j){
            if(Utility::isAnagram($arr[$i] , $arr[$j])){
                $stack->push($arr[$i]);
            }}
        }
    }
    //Prininting anagram sin stack
    echo "Prime Anagrams In Stack Are :\n\n";
    PrintRevStack($stack);
}
/**
 * Function to Print stack in reverse
 */
function PrintRevStack($stack){
    for ($i=0; $i < $stack->size() ; $i++) { 
        echo $stack->pop()."," ;
    }
    echo "\n";
}
stackAna();
function getprime($range){
    //array to store prime no
    $prime = [] ;
    //variacle to set index
    $count= 0;
    for ($i=2; $i < $range ; $i++) { 
        if(Utility::isprime($i)){
            $prime[$count++] = $i;
        }
    }
    return $prime;
}
?>
