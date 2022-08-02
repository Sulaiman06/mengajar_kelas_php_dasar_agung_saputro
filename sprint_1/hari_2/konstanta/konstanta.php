<?php

// Cara 1
// ("VERSION") => KEY (HARUS STRING / HURUF BESAR, TIDAK BISA MEGGUNAKAN NUMBER)
// "2.7.0 => VALUE (HARUS BERUPA STRING)
define("VERSION", "2.7.0");
echo "Version Saat Ini : " . VERSION . "\n";

// Cara 2 - Rekomendasi
// NILAI_UJIAN = KEY (HARUS STRING / HURUF BESAR, TIDAK BISA MEGGUNAKAN NUMBER)
// 30 => VALUE (Boleh Berupa Tipe Data String Atau Tipe Data Number)
const NILAI_UJIAN = 30;
echo "Nilai Anda : " . NILAI_UJIAN;
?>