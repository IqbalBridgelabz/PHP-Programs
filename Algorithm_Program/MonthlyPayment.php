<?php
require ("/iqbal/Functional_Programs/Utility.php");
require ("Utility2.php");
echo "Enter year :";
$y = Utility::getInt();
echo "Enter Amount : ";
$r = Utility::getInt();
echo "Enter Principal Loan : ";
$p = Utility::getInt();
monthlyPayment($y,$r,$p);
function monthlyPayment($y,$r,$p){
    $n = 12 * $y;
    $R = $r / (12 *100);
    $payment = ($p * $R) / (1 - pow((1+$R),-$n));
    echo "Monthly Payment ".$payment."\n";
}
?>