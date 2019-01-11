<?php

require "Utility.php";
echo "Enter  num:";
$N = Utility::getInt();
$harmonicNum = 0;
for ($i = 1; $i <= $N; $i++) {
    if ($N === $i) {
        echo "1/$i" . ' = ';
    } else {
        echo "1/$i" . ' + ';
    }

    $var = 1 / $i;
    $harmonicNum = $harmonicNum + $var;
}
echo $harmonicNum . "\n";
