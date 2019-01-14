<?php 
/**
 * A program with cubic running time. Read in N integers and counts the   number of triples that sum to exactly 0.
 */
 require ("Utility.php");
 echo "Enter array size: ";
 $n = Utility::getInt();
 for($i=0; $i<$n;$i++){
     $iArr[$i]=trim(fgets(STDIN));
 }
 Utility::findTriplets($iArr, $n); 
?> 