<?php 
 require ("Utility.php");
 echo "Enter array size: ";
 $n = Utility::getInt();
 for($i=0; $i<$n;$i++){
     $iArr[$i]=trim(fgets(STDIN));
 }
 Utility::findTriplets($iArr, $n); 
?> 