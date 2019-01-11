<?php 
require ("/iqbal/Functional_Programs/Utility.php");
/**  Bubble sort program for word search */
echo " Enter string : ";
$str = Utility::getArrayString();
$arr = explode(" ",$str);
stringSearch($arr);

function stringSearch($str){
    $n = count($str);
    for($i=0;$i<$n;$i++){
        for($j=0; $j<$n-1-$i;$j++){
            if((strcmp($str[$j],$str[$j+1])>0)){
                $temp = $str[$j];
                $str[$j] = $str[$j+1];
                $str[$j+1] = $temp;
            }
        }
    }  
    for($i=0;$i<$n;$i++){
        echo $str[$i]." ";
    }
 
}

?>