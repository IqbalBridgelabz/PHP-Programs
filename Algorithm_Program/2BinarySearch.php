<?php 

require ("/iqbal/Functional_Programs/Utility.php");
 require ("Utility2.php");

function binarySearch($arr, $x) 
{ 

    // check for empty array 

    if (count($arr) == 0) return false; 

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

  
// Driver code 

echo "Enter String: ";
$str = Utility::getArrayString();
$arr = explode(" ",$str);
$start  = round(microtime(true)*1000);
echo " enter search element : ";
$search = Utility::getString(); 
if(binarySearch($arr, $search) == true) { 
    echo "Search element=>".$search." :Exists in given array: \n"; 
    $stop = round(microtime(true)*1000);
    echo " Elapsed time =>".Utility::stopWatch($start,$stop);
} 
else { 
    echo "Search element=>".$search." :Doesnt Exist in given array:"; 
} 
?> 
