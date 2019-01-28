<?php
function getStockData()
{
    $stockAcount = json_decode(file_get_contents("Comercial5.json"));
    foreach ($stockAcount as $sa) {
        // $sa = (object)$sa;

        echo sprintf(" | Buy or Sell:%-4s | Sharename:%-8s | Amount:%-8s | Date:%-4s | Time:%-4s |  Symbol:%-4s",$sa->buyOrSell,$sa->ShareName,$sa->amount, $sa->date,$sa->time, $sa->symbol ) . "\n";
    }
    // print_r($stockAcount);
    $j = sizeof($stockAcount) - 1;
    echo "\n<Symbol>  <Type>\n";
    for ($i = sizeof($stockAcount) - 1; $i >= 0; $i--) {
        echo sprintf("%-11s%-4s", $stockAcount[$j]->symbol, $stockAcount[$j]->buyOrSell) . "\n";
        $j--;
    }
}
getStockData();
