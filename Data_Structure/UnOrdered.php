<?php
require "UnOrderedList.php";
$ls = new UnOrderedList();
$arr = (file_get_contents("text.txt"));
$arr1 = explode(" ",$arr);
$n = count($arr1);
for($i=0; $i<$n;$i++){
    $ls->add($arr1[$i]);
}
echo $ls->getStr() . "\n";
echo "enter value to search: ";
$val = Utility::getString();
if ($ls->search($val)) {
    echo "Found \n";
    $ls->remove($val);
    //$ls->show();
    echo $ls->getStr() . "\n";
} else {
    echo "Not Found \n";
    $ls->add($val);
    //$ls->show();
    echo $ls->getStr() . "\n";
}
?>