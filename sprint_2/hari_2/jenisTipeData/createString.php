<?php

// String => Menyimpan Beberapa Karakter, Bisa Berupa Simbol, Text, Number

// String Biasa
$alamat = "Jl. Raya Cikarang &@**^$3267" . PHP_EOL;
echo $alamat;
var_dump($alamat);

// Langsung Eksekusi / Perintah Untuk Menampilkan Tulisan
echo "Umur Saya Adalah 20 Tahun %#%^*! \n";

// Heredoc / Multiline - Bisa Membuat Baris Baru Dengan Kita Tulis Dibawahnya
$alamat = <<<BAMBANG
Indonesia - Negara Ku 48@&*^&%^,
Jakarta Timur - Kota Ku,
Jl. Raya Cilangkap - Alamat Ku
BAMBANG;

echo $alamat;

?>