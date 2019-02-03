<?php
/********************************************************************************************
* Purpose  : Extend the Prime Number Program and store only the numbers in that range that are Anagrams.
             For e.g. 17 and 71 are both Prime and Anagrams in the 0 to 1000 range. 
             Further store in a 2D Array the numbers that are Anagram and numbers that are not Anagram
* File Name: QueueAnagram.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require("Queue.php");
/**
 * Function to run and test the program and print result to user
 */
function queAna()
{
    //creating new queue object
    $que = new Queue();
    //getting prime no till 1000
    $arr = getprime(1000);
    //checking prime numbers which are anagrams
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i != $j) {
                //checking if anagram or not
                if (Utility::isAnagram($arr[$i], $arr[$j])) {
                    $que->enqueue($arr[$i]);
                    break;
                }
            }
        }
    }
    echo "Anagrams in Queue Are :\n\n";
    echo $que . "\n\n";
}
/**
 * Function to get the prime no in given range
 */
function getprime($range)
{
    //array to store prime no
    $prime = [];
    //variacle to set index
    $count = 0;
    for ($i = 2; $i < $range; $i++) {
        if (Utility::primeNumber($i)) {
            $prime[$count++] = $i;
        }
    }
    return $prime;
}
queAna();
?>
