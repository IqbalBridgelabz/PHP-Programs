<?php 
require ("Utility.php");
//Utility::twoDArray();
echo "1 - Integer: \n";
echo "2 - Double: \n";
echo "3 - Boolean: \n";
echo "4 - Exit: \n";
echo "Enter num value : ";
$num = Utility::getInt();
switch($num){
    case 1: 
    Utility::twoDArrayForInteger();
    break;
    case 2: 
    Utility::twoDArrayForDouble();
    break;
    case 3:
    Utility::twoDArrayForBoolean();
    break;
    case 4: exit();
}
?>