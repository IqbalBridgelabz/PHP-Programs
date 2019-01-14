<?php
/**
 *  This program takes a command-line argument N and prints a table of the powers of 2 that are less than or equal to 2^N.
 */
require ("Utility.php");
echo "Enter Number:";
$num = Utility::getInt();
while($num>31 || $num===0){
    echo "Enter valid input:";
    $num = Utility::getInt();
}
Utility::power($num);
?>