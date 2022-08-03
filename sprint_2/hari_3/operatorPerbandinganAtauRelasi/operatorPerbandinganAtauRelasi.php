<?php

echo "== Sama Dengan" .PHP_EOL;
echo "true" . PHP_EOL;
// True => Jika Value Sama Walapun Beda Tipe Data
var_dump(10 == "10");
// False => Jika Value Berbeda Walaupun Tipe Datanya Sama
echo "false" . PHP_EOL;
var_dump(10 == 20);

echo "=== Identik" .PHP_EOL;
echo "true" . PHP_EOL;
// True => Jika Value Sama Walapun Beda Tipe Data
var_dump(10 === 10);
// False => Jika Value Sama Walaupun Tipe Datanya Sama
echo "false" . PHP_EOL;
var_dump(10 === "10");

echo "!= Tidak Sama Dengan" .PHP_EOL;
echo "true" . PHP_EOL;
// True => Jika Value & Tipe Data Berbeda
var_dump(10 != "tes");
// False => Jika Value Sama Walaupun Tipe Datanya Berbeda
echo "false" . PHP_EOL;
var_dump(10 != "10");
// False => Jika Value Sama Walaupun Tipe Datanya Sama
echo "false" . PHP_EOL;
var_dump(10 != 10);

?>