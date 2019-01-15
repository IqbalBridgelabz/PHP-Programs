<?php

/*
 * Complete the taskScheduling function below.
 */
function taskScheduling($d, $m) {
    /*
     * Write your code here.
     */

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $dm_temp);
    $dm = explode(' ', $dm_temp);

    $d = intval($dm[0]);

    $m = intval($dm[1]);

    $result = taskScheduling($d, $m);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
