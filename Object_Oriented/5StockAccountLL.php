<?php
/********************************************************************************************
 * Purpose : Extend the above program to Create InventoryManager to manage the Inventory.
 *           The Inventory Manager will use InventoryFactory to create Inventory Object from JSON.
 *           The InventoryManager will call each Inventory Object in its list to calculate the
 *           Inventory Price and then call the Inventory Object to return the JSON String. 
 *           The main program will be with InventoryManager

 * File Name: StockAccount.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 26/01/2019
 ********************************************************************************************/
require_once("5StockAccount.php");
/**
 * add function to implements item
 */
function add()
{
    $arr = json_decode(file_get_contents("5StockAccountShareFile.json"), true);
    echo "<stocks>  <symbol>\n";
    foreach ($arr['list'] as $key) {
        echo sprintf("%-11s%-6s", $key['ShareName'], $key['symbol']) . "\n";
    }
    echo "\nenter stock symbol\n";
    $symbol = trim(fgets(STDIN));
    echo "enter amount\n";
    $amount = Utility::getInt();
    buy($amount, $symbol);
}
/**
 * function to remove item
 */
function remove()
{
    $stockAcount = json_decode(file_get_contents("5StockAccount.json"), true);
    echo "<stocks>  <symbol>\n";
    foreach ($stockAcount as $key) {
        echo sprintf("%-11s%-6s", $key['ShareName'], $key['symbol']) . "\n";
    }
    echo "enter symbol to remove data\n";
    $symbol = trim(fgets(STDIN));
    $i = 0;
    foreach ($stockAcount as $key) {
        if ($key['symbol'] == $symbol) {
            unset($stockAcount[$i]);
            Utility::writeFl(json_encode($stockAcount), "5StockAccount.json");
            echo "data removed\n";
            return;
        }
        $i++;
    }
    echo "no data found\n";
}
/**
 * main function 
 */
function mainll()
{
    $n = 1;
    while ($n != 4) {
        echo "Press:\n1. Add share:\n2. Remove share:\n3. Show list:\n4. Exit:\n";
        $n = Utility::getInt();
        switch ($n) {
            case 1:
                add();
                break;
            case 2:
                remove();
                break;
            case 3:
                printReport();
                break;
            default:
                if ($n != 4) {
                    echo "Invalid input:\n";
                }
                break;
        }
    }
}
mainll();


?>