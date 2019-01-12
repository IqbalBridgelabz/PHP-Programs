 <?php
require "/home/admin1/iqbal/Functional_Programs/Utility.php";
require "Utility.php";

static $total = 0;
function calculate($i ,$money, $notes,&$total)
{
	
    $rem = 0;
    if ($money == 0) {
        return ;
    } else {
        if ($money >= $notes[$i]) {
            // logic for Calculating The notes
            $calNotes = (int)($money / $notes[$i]);
            $rem = $money % $notes[$i];
            $money = $rem;
            $total += $calNotes;
            echo $notes[$i] . " Notes -----> " . $calNotes." \n";
        }
        $i++;
        return calculate($i ,$money, $notes,$total);
    }
}

static $notes = array(1000, 500 , 100 , 50 , 10 , 5 , 2 , 1 );
echo "Enter amount ";
$money = Utility::getInt();
calculate(0 ,$money, $notes,$total);
echo "Total Number of Notes are : " . $total."\n";
?>