<?php

$apel = 10000;
$mangga = 15000;
$duren = 20000;

$dana = 60000;

// Operator Penugasan
/*
$dana = 60000
60000 -= 10000
50000 -= 15000
35000 -= 20000
15000
echo 15000
*/
$dana -= $apel;
$dana -= $mangga;
$dana -= $duren;


// Eksperimen
/*
80000 -= 30000 => 10000 + 10000 + 10000
50000 -= 15000
35000 -= 20000
15000
echo 15000
*/
$eksperimen = 40000;
$eksperimen -= $apel += $apel + $apel;
$eksperimen -= $mangga;
$eksperimen -= $duren;

echo $dana;
echo "\n";
echo $eksperimen;

?>