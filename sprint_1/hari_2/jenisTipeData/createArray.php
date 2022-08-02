<?php

// Array Numerik - Model Lama
$iniNumerikLama = array(8, 2.6, "Bambang", true, null);
var_dump($iniNumerikLama);

// Array Numerik - Model Baru
$iniNumerikBaru = [8, 1, "Budi", null, false];
var_dump($iniNumerikBaru);

$iniAssosiatifBaru = [
    "nama" => "Bambang",
    "umur" => 20,
    "alamat" => "Jl. Raya Cilangkap",
    "kota" => "Jakarta Timur",
    "negara" => "Indonesia"
];
var_dump($iniAssosiatifBaru);

// Array Multidimensi
$iniArrayDalamArray = [
    "nama" => "Budi",
    "umur" => 20,
    "alamat_lengkap" => [
        "dosmili" => "Jl. Raya Cilangkap - Alamat Ku",
        "country" => "Indonesia"
                        ]
];
var_dump($iniArrayDalamArray);

?>