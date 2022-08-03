<?php

// Cara 1
// ("VERSION") => KEY (HARUS STRING / HURUF BESAR / UPPER_CASE, TIDAK BISA MEGGUNAKAN NUMBER)
// "2.7.0 => VALUE (Boleh Berupa Tipe Data String Atau Tipe Data Number)
define("VERSION", 20.67);
echo "Version Saat Ini : " . VERSION . "\n";

define("FOOD", "MIE AYAM");
echo "Makanan Kesukaan Ku : " . FOOD . "\n";

// Cara 2 - Rekomendasi
// NILAI_UJIAN = KEY (HARUS STRING / HURUF BESAR / UPPER_CASE, TIDAK BISA MEGGUNAKAN NUMBER)
// 30 => VALUE (Boleh Berupa Tipe Data String Atau Tipe Data Number)
const NILAI_UJIAN = 30 . PHP_EOL;
echo "Nilai Anda : " . NILAI_UJIAN;

const DRINK = "BOBA";
echo "Minuman Kesukaan Ku : " . DRINK . PHP_EOL;
?>