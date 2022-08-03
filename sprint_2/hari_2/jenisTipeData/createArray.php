<?php

// Array Numerik - Model Lama
$iniNumerikLama = array(8, 2.6, "Bambang", true, null);
var_dump($iniNumerikLama);

// Array Numerik - Model Baru - Rekomendasikan
$iniNumerikBaru = [8, 1, "Budi", null, false];
var_dump($iniNumerikBaru);

// Array Assosiatif - Model Baru - Rekomendasikan
$iniAssosiatifBaru = [
    "nama" => "Bambang",
    "umur" => 20,
    "alamat" => "Jl. Raya Cilangkap",
    "kota" => "Jakarta Timur",
    "negara" => "Indonesia"
];
var_dump($iniAssosiatifBaru);

// Array Multidimensi / Array Didalamnya Ada Array - Hanya Bisa Assosiatif
$iniArrayDalamArray = [
    "nama" => "Budi",
    "umur" => 20,
    "alamat_lengkap" => [
        "dosmili" => "Jl. Raya Cilangkap - Alamat Ku",
        "country" => "Indonesia"
                        ]
];
var_dump($iniArrayDalamArray);

// Array Didalam Ada Array Dan Didalamnya Ada Lagi Array Dan Didalamnya Ada Lagi Array (Array Dalam Array Tanpa Batas)
$arrayDalamArrayTanpaBatas = 
    // Array 1
    [
    "nama" => "Agung Saputro",
    "umur" => 24,
    // Array 2
    "game" => [
        "epicGames" => true,
        "steam" => "Valorant",
        // Array 3
        "waktuBermain" => [
            "Sehari" => "2 Jam",
            // Array 4
            "mainBersama" => [
                "nama" => null,
                "nama2" => "Angga Risky",
                "mainDirumahAtauWarungIndo" => [
                    "rumah" => 20.54,
                    "warungIndo" => "Daerah Cilangkap"
                    ]
                ]
            ]
        ]
    ];
var_dump($arrayDalamArrayTanpaBatas);

    
?>