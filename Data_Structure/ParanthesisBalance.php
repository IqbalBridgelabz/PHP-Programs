<?php
   /********************************************************************************************
* Purpose  : Take an Arithmetic Expression such as (5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3) 
             where parentheses are used to order the performance of operations. 
             Ensure parentheses must appear in a balanced fashion.
* File Name: ParenthesisBalance.php
* Author   : @Hamid Iqbal Khan
* Version  : 1.0
* Since    : 16/01/2019
********************************************************************************************/
    require("Stack.php");
    //object of stack
    $st = new Stack();
    //take arithmetic expression from user and split it into array
    $arr = str_split(readline("enter Arithmetic Expression: "),1);
    //access element one by one
    foreach ($arr as $key) {
        //if t get open parentheses then it will push in the stack
        if ($key == "(") {
            $st->push($key);
        }
        //else if it get close parentheses the pop
        elseif ($key == ")") {
            if ($st->isEmpty()) {
                echo "not balace\n";
               return;
            }
            $st->pop();
        }
    }
    //int the end if stack is empty then parentheses is balance else not balance
    if ($st->isEmpty()) {
        echo "balance\n";
    }else {
        echo "not balace\n";
    }
    
?>