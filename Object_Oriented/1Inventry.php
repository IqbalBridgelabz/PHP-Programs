<?php

$character = file_get_contents('1Inventry.json');
$characters = json_decode($character);
foreach($characters as $result){
    echo "name :".$result->name."  price: $".$result->price. " weight :".$result->weight."\n";
}
?>