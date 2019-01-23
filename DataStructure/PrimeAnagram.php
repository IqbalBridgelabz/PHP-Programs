<?php
    
    require("Utility.php");
    //get prime number 0 to 1000
    $arr = Utility::primeNumber();
    $arr2D = array();
    $index = 0;
    $n = 100;
    //array 0 to 10 because 10 line neened in between 0 to 1000
    for ($i=0; $i < 10; $i++) { 
        //array to push the value
        $iArr = array();
        //array to save the value in inner array
        for ($j=0; $j < 100; $j++) { 
            //if index reach size of array then break or when the value of index 
            //elemnet is greater then $n value break 
            if ($index == sizeof($arr) || $arr[$index]>$n ) {
                break;
            }
            $iArr[$j] = $arr[$index++];
        }
        //after every loop increase by 100
        $n += 100;
        array_push($arr2D,$iArr);
    }
    // print all anagram of 2d array
    for ($i=0; $i < sizeof($arr2D); $i++) { 
        for ($j=0; $j < sizeof($arr2D[$i]); $j++) { 
            echo $arr2D[$i][$j]." ";
        }
        echo "\n";
    }
?>