<?php
$characters = json_decode(file_get_contents('InventryManagement.json'));
static $valueOfTotalStock = 0;
static $valueOfEachStock;
foreach($characters as $result){
    echo "Stock_Name : ".$result->Name.
         "-----Number of Share : ".$result->Share.
         "-----Share Price : ".$result->Price."\n";
         $result->valueOfEachStock = $result->stock($result->Share,$result->Price);
         $result->valueOfTotalStock = $result->valueOfTotalStock + $result->valueOfEachStock;
}
echo "value of Total Stock : ".$valueOfTotalStock."\n";
function stock($Share,$Price){
    $valueOfEachStock = $Share * $Price;
    return $valueOfEachStock;
}
?>
