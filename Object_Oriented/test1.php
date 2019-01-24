<?php

 //car strength
$strength = array("2","3","4","5","6","7","8","9","10","J","Q","K","A");
//suit of cards
$suit = array("C","D","H","S");

//inlcude class and create card deck
include("./card_deck.php");
$deck = new card_deck();

//add type with strength property and values from array
//and get id of type
$id = $deck->add_type("strength", $strength);

//add suit property to same type by providing id
$deck->add_type("suit", $suit, 1, $id);

//shuffle cards
$deck->shuffle();


//deal cards for 4 people, 2 cards for each
echo "Player 1: \n";
$arr = $deck->deal(2);
foreach($arr as $key => $val)
{
    $arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "\n";

echo "Player 2: \n";
$arr = $deck->deal(2);
foreach($arr as $key => $val)
{
    $arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "\n";

echo "Player 3: \n";
$arr = $deck->deal(2);
foreach($arr as $key => $val)
{
    $arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "\n";

echo "Player 4: \n";
$arr = $deck->deal(2);
foreach($arr as $key => $val)
{
    $arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "\n";

//deal flop, turn and river
echo "Flop: \n";
$arr = $deck->deal(3);
foreach($arr as $key => $val)
{
    $arr[$key] = implode("", $val);
}
echo implode(" ", $arr);
echo "\n";

echo "Turn: \n";
$arr = $deck->deal(1);
echo implode("", current($arr));
echo "\n";

echo "River: \n";
$arr = $deck->deal(1);
echo implode("", current($arr));
echo "\n";

?>