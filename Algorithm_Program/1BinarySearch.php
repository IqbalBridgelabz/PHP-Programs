<?php 
/**
 * Binary search program for integer
 */
require ("/home/admin1/iqbal/Functional_Programs/Utility.php");
function binarySearch( &$arr, $x) 
{ 
    // check for empty array 
    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = count($arr) - 1; 
    while ($low <= $high) { 
        // compute middle index
        $mid = (floor($low + $high) / 2); 
        // element found at mid 
        if($arr[$mid] == $x) { 
            return true; 
        } 
        if ($x < $arr[$mid]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        } 
    } 
    // If we reach here element x doesnt exist 
    return false; 
} 
$arr = Utility::getIntArr();
$start  = round(microtime(true)*1000);
echo "enter search element : ";
$search = Utility::getInt(); 
if(binarySearch($arr, $search) == true) { 
    echo $search." Exists in given array: \n"; 
    $stop = round(microtime(true)*1000);
    echo " Elapsed time =>".Utility::stopWatch($start,$stop);
} 
else { 
    echo $search." Doesnt Exist"; 
} 
?> 
