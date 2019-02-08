<?php
/********************************************************************************************
 * Purpose  : Prints the Nth harmonic number: 1/1 + 1/2 + ... + 1/N    
 * File Name: HarmononicNUm.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require "Utility.php";
echo "Enter  num:";
$N = Utility::getInt();
$harmonicNum = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($N === $i) {
        echo "1/$i" . ' = ';
    } else {
        echo "1/$i" . ' + ';
    }
    $var = 1 / $i;
    $harmonicNum = $harmonicNum + $var;
}
echo $harmonicNum . "\n";
