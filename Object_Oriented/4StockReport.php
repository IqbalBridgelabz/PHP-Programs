<?php
/********************************************************************************************
 * Purpose : Extend the above program to Create InventoryManager to manage the Inventory.
 *           The Inventory Manager will use InventoryFactory to create Inventory Object from JSON.
 *           The InventoryManager will call each Inventory Object in its list to calculate the
 *           Inventory Price and then call the Inventory Object to return the JSON String. 
 *           The main program will be with InventoryManager

 * File Name: StockReport.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 26/01/2019
 ********************************************************************************************/
require("Utility.php");
/**
 * function getStockData
 */
function getStockData($n)
{
    $stock['stock'] = array();
    for ($i = 0; $i < $n; $i++) {
        $tempArr = array('ShareName' => "", 'shareNumber' => 0, 'sharePrice' => 0);
        echo "enter Share Name \n";
        $name = trim(fgets(STDIN));
        $tempArr['ShareName'] = $name;
        echo "enter Number of Share \n";
        $tempArr['shareNumber'] = Utility::getInt();
        echo "enter Share Price\n";
        $tempArr['sharePrice'] = Utility::getInt();

        array_push($stock['stock'], $tempArr);
    }
    return $stock;
}

function update()
{
    echo "<<Number of share u want to add:>>\n";
    $update = getStockData(Utility::getInt());
    $toUpdate = json_decode(Utility::readFl("4StockReport.json"), true);
    foreach ($update['stock'] as $key) {
        array_push($toUpdate['stock'], $key);
    }
    return $toUpdate;
}
function write($arr)
{
    Utility::writeFl(json_encode($arr), "4StockReport.json");
}

function showRp()
{
    $data = json_decode(file_get_contents("4StockReport.json"), true);
    echo "Stock name  Stock price  Total stock Total price:\n";
    foreach ($data['stock'] as $key) {
        echo sprintf("%-12s%-13u%-12u%-12u", $key['ShareName'], $key['shareNumber'], $key['sharePrice'], $key['shareNumber'] * $key['sharePrice']) . "\n";
    }

}

$n = 1;
while ($n == 1) {
    echo "Press:\n1 To Creat new file:\n2 Update more share:\n3 Print report:\n";
    $num = Utility::getInt();
    if ($num == 1) {
        echo "<<Enter Number of Share>>\n";
        write(getStockData(Utility::getInt()));
    } elseif ($num == 2) {
        write(update());
    } elseif ($num == 3) {
        showRp();
    }
    echo "Press 1 to continue: \nPress any key to exit:\n";
    $n = Utility::getInt();
}
?>