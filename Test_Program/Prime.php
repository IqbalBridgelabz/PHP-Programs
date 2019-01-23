<?php
$arr2 = [];
$n = 100;
$index = 0;
function primeNumber()
{
    for($i=2; $i<1000; $i++)
    {
        $count = 0;
        for($j=1;$j<=$i;$j++){
            if($i % $j==0){
            $count++;
            }
        }
        if($count==2)
        {
           echo $i." ";
           
        }
    }
    echo "\n";
}
?>