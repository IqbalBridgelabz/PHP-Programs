<?php
/********************************************************************************************
 * Purpose  : Simulates a gambler who start with $stake and place fair $1 bets until he/she goes 
 *            broke (i.e. has no money) or reach $goal. 
 *            Keeps track of the number of times he/she wins and the number of bets he/she makes. 
 *            Run the experiment N times, averages the results, and prints them out.   
 * File Name: Gambler.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 2/01/2019
 **********************************************************************************************/
require ("Utility.php");
echo "Enter Stake value: ";
$stake = Utility::getInt();
echo "Enter goal value: ";
$goal= Utility::getInt();
echo "Enter trials value: ";
$trials= Utility::getInt();
Utility::gambler($stake,$goal,$trials);
?>