<?php
/**
 * Gamble Problem
 */
require ("Utility.php");
echo "Enter Stake value: ";
$stake = Utility::getInt();
echo "Enter goal value: ";
$goal= Utility::getInt();
echo "Enter trials value: ";
$trials= Utility::getInt();
Utility::gambler($stake,$goal,$trials);
?>