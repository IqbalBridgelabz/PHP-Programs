<?php
/********************************************************************************************
 * Purpose : Create a JSON file having Inventory Details for
 *           Rice, Pulses and Wheats with properties name, weight, price per kg.
 * File Name: Inventory.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 25/01/2019
 ********************************************************************************************/
$character = file_get_contents('1Inventry.json');
$characters = json_decode($character);
foreach($characters as $result){
    echo "name :".$result->name."  price: $".$result->price. " weight :".$result->weight."\n";
}
?>