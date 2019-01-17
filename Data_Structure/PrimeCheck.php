<?php

require("Utility.php");
/**
 * Function to get the prime no between 0-$range 
 * @param range the range between which to find the numbers
 */
function getprime($range)
{
    $prime = [];
    $count = 0;
    for ($i = 2; $i < $range; $i++) {
        if (Utility::isprime($i)) {
            $prime[$count++] = $i;
        }
    }
    return $prime;
}

function getIndex($numb)
{
    $num = $numb;
    if ($num < 100) {
        return 0;
    }
    while ($num > 9) {
        $num = floor($num / 10);
    }
    return $num;
}

function primeRun()
{
    $primeArr = getPrime(1000);
    $prime2d = Utility::twoDArray();
    for ($i = 0; $i < count($primeArr); $i++) {
        $index = getIndex($primeArr[$i]);
        $prime2d[$index][count($prime2d[$index])] = $primeArr[$i];
    }
    echo "2D array stored is :\n";
    Utility::twoDArray($prime2d);
    echo "\n";
}

function get2d()
{
    $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $aa = array();
        array_push($arr, $aa);
    }
    return $arr;
} 
primeRun();
?>