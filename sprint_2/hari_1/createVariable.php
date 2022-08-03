<?php

$umur = 23; // Integer => Bilangan Bulat
$nilai = 80.5; // Float => Bilangan Desimal / Pecahan
$alamat = "Jalan Raya Cilangkap"; // String => Karakter

// Cara 1 Menampilkan Variabel Didalam String - Rekomendasi
echo "Nilai Saya : $nilai" . PHP_EOL;

// Cara 2 Menampilkan Variabel Didalam String - \n Harus Berada Dalam String
echo "Alamat Saya : $alamat \n";

// Cara 3 Menampilkan Variabel Didalam String
echo "Umur Saya : ";
echo $umur;
echo "\n";

// \n => Membuat Enter Baru
// Varialbe == Tipe Data (Cara Membuat Variable & Tipe Data Sama)
// Variable => Menyimpan Data Dan Bisa Menggunakan Semua Tipe Data

?>