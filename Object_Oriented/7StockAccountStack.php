<?php
/********************************************************************************************
 * Purpose : Extend the above program to Create InventoryManager to manage the Inventory.
 *           The Inventory Manager will use InventoryFactory to create Inventory Object from JSON.
 *           The InventoryManager will call each Inventory Object in its list to calculate the
 *           Inventory Price and then call the Inventory Object to return the JSON String. 
 *           The main program will be with InventoryManager

 * File Name: StockReportStack.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 26/01/2019
 ********************************************************************************************/
function getStockData()
{
    $stockAcount = json_decode(file_get_contents("7StockAccountTList.json"), true);
    print_r($stockAcount);
    $j = sizeof($stockAcount)-1;
    echo "<symbol>  <type>\n";
    for ($i=sizeof($stockAcount)-1; $i >=0 ; $i--) { 
        echo sprintf("%-11s%-6s", $stockAcount[$j]['symbol'], $stockAcount[$j]['buyOrSell'])."\n";
        $j--;
    }
}
getStockData();
?>