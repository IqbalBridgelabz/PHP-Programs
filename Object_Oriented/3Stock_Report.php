<?php
require "Utility.php";
static $valueOfTotalStock = 0;
static $valueOfEachStock;
echo "Program to read in Stock Names, Number of Share, Share Price. \n\n";
echo "Enter number of Stock : ";
$no= Utility::getInt();
for($i=1; $i<=$no; $i++){
    switch($i){
        case 1 :echo "Enter Stock Name : ";
                $name = Utility::getString();
                echo "Enter No of Shares : ";
                $num = Utility::getInt();
                echo "Enter Share price : ";
                $price = Utility::getInt();
                $valueOfEachStock = stock($num,$price);
                echo "value of Each stock : ".$valueOfEachStock."\n";
                break;
        case 2 :echo "Enter 2nd Stock Name : ";
                $name = Utility::getString();
                echo "Enter No of Shares : ";
                $num = Utility::getInt();
                echo "Enter Share price : ";
                $price = Utility::getInt();
                $valueOfEachStock = stock($num,$price);
                echo "value of Each stock : ".$valueOfEachStock."\n";
                break;
        case 3 :echo "Enter 3rd Stock Name : ";
                $name = Utility::getString();
                echo "Enter No of Shares : ";
                $num = Utility::getInt();
                echo "Enter Share price : ";
                $price = Utility::getInt();
                $valueOfEachStock = stock($num,$price);
                echo "value of Each stock : ".$valueOfEachStock."\n";
                break;
        case 4 :echo "Enter 4th Stock Name : ";
                $name = Utility::getString();
                echo "Enter No of Shares : ";
                $num = Utility::getInt();
                echo "Enter Share price : ";
                $price = Utility::getInt();
                $valueOfEachStock = stock($num,$price);
                echo "value of Each stock : ".$valueOfEachStock."\n";
                break;
        case 5 :echo "Enter 5th Stock Name : ";
                $name = Utility::getString();
                echo "Enter No of Shares : ";
                $num = Utility::getInt();
                echo "Enter Share price : ";
                $price = Utility::getInt();
                $valueOfEachStock = stock($num,$price);
                echo "value of Each stock : ".$valueOfEachStock."\n";
                break;
        default :echo "Enter Valid Input : ";
    }
    $valueOfTotalStock = $valueOfTotalStock + $valueOfEachStock ;
}
echo "Value of Total Stocks : ".$valueOfTotalStock."\n";
/**
 * Function to calculate value of Each Stock
 */ 
function stock($num,$price){
    $valueOfEachStock = $num * $price;
    return $valueOfEachStock;
}
?>