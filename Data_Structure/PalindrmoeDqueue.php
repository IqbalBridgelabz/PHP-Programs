<?php
/********************************************************************************************
* Purpose  :  A palindrome is a string that reads the same forward and backward, 
              for example, radar, toot, and madam. We would like to construct an algorithm to 
              input a string of characters and check whether it is a palindrome.
* File Name: PalindromeDequeue.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
require("Utility.php");
/**
 * Function to check if a string is pallindrome or not using dequeue
 */
function isPallindrome()
{
    //class containing dequeue and its functions
    require("Dequeue.php");
    //creating new dequeue
    $deq = new Dequeue();
    //taking user input to search
    echo "Enter a string to check for pallindrome : ";
    $str = Utility::getString();

    
    //adding string characters to the dequeue
    for ($i = 0; $i < strlen($str); $i++) {
        $deq->addRear($str[$i]);
    }
    //checking if pallindrome
    for ($i = 0; $i < strlen($str) / 2; $i++) {
        /**
         * removing from front and back and checking simultaneously is they are same or not
         */
        $f = $deq->removeFront();
        $r = $deq->removeRear();
        if ($f != $r) {
            echo $str." is not Pallindrome: \n";
            return false;
        }
        echo $str." is Pallindrome: \n";
        return true;
    }
}
isPallindrome();
?>