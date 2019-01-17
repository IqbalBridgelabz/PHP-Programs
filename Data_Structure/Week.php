<?php
require("Queue.php");
$day = new Queue();
$date = new Queue();
$weekDay = new Queue();
function getCal($mon, $yr)
{
    global $day, $date, $weekDay;
    $dyArr = array("su", "mo", "tu", "we", "th", "fr", "sa");
    $monthArr = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
        //if year is leap year then is will increase one day in 2nd month
    if (Utility::leapYear($yr)) {
        $monthArr[1] = 29;
    }
    $firstDay = Utility::printDay(1, $mon, $yr);
    for ($i = 0; $i < sizeof($dyArr); $i++) {
        $day->enqueue($dyArr[$i]);
    }
    for ($i = 0; $i < $monthArr[$mon - 1]; $i++) {
        $date->enqueue(($i + 1)."");
    }
    $weekDay->enqueue($day);
    for ($i = 0; $i < 7; $i++) {
        if ($i >= $firstDay || $i <= $monthArr[$mon - 1] - 1) {
            $weekDay->enqueue($date->dequeue());
        } else {
            $weekDay->enqueue("  ");
        }
    }
    
    for ($i = 0; $i < 7; $i++) {
        $temp = $weekDay->dequeue();
        $temp->show();
        // for ($j = 0; $j < 7; $j++) {
        //     echo $temp->dequeue();
        // }
        echo "\n";
    }
}
    
getCal(10, 2018);
?>