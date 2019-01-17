<?php
require "OrderedList.php";
$ol = new OrderedList();
$arr = (file_get_contents("text.txt"));
$arr1 = explode(" ",$arr);
$n = count($arr1);
for($i=0; $i<$n;$i++){
    $ol->add($arr1[$i]);
}

echo $ol->getStr() . "\n";
echo "enter value to search: ";
$val = Utility::getString();
if ($ol->search($val)) {
    echo "Found \n";
    $ol->remove($val);
    //$ls->show();
    echo $ol->getStr() . "\n";
} else {
    echo "Not Found \n";
    $ol->add($val);
    //$ls->show();
    echo $ol->getStr() . "\n";
}
?>