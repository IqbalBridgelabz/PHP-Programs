 <?php
 /**
  * There is 1, 2, 5, 10, 50, 100, 500 and 1000 Rs Notes which can be returned by Vending Machine. Write a Program to calculate the minimum number of Notes as well as the Notes to be returned by the Vending Machine as a Change
  */
require "Utility.php";
static $total = 0;
static $notes = array(1000, 500 , 100 , 50 , 10 , 5 , 2 , 1 );
echo "Enter amount : ";
$money = Utility::getInt();
Utility::calculate(0 ,$money, $notes,$total);
echo "Total Number of Notes are : " . $total."\n";
?>