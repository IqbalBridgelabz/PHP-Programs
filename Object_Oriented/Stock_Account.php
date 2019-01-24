<?php
require "Utility.php";
class StockAccount{
    function sAccount($name){
        StockAccount::save($name);
    }
    function valueOf(){

    }
    function buy($num,$name){

    }
    function sell($num,$name){

    }
    function save($str){

    }
    function printReport(){

    }
}
echo "Press 1 to create new account:
     \nPress 2 to check total values:
     \nPress 3 to buy:\nPress 4 to sell:
     \nPress 5 to save:
     \nPress 6 to print report:\n";
echo "Enter your choice: ";
$ch = Utility::getInt();
switch($ch){
    case 1 : echo "Enter New User Name : ";
             $name = Utility::getString(); break;
    case 2 : StockAccount::valueOf(); break;
    case 3 : echo "Enter share Amount : ";
             $amount = Utility::getInt();
             echo "Enter Account Name to Add : ";
             $name = Utility::getString();
             StockAccount::buy($amount,$name); break;
    case 4 : echo "Enter share Amount : ";
             $amount = Utility::getInt();
             echo "Enter Account Name to Remove : ";
             $name = Utility::getString();
             StockAccount::sell($amount,$name); break;
    case 5 : echo "Enter Account Name to Save into File : ";
             $name = Utility::getString(); break;
    case 6 :  StockAccount::printReport(); break;
    default : echo "Enter valid Input: ";
}
?>