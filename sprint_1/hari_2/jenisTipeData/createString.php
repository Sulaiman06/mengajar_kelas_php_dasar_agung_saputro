<?php

// String Biasa
$alamat = "Jl. Raya Cikarang &@**^$3267" . PHP_EOL;
echo $alamat;
var_dump($alamat);

// Langsung Eksekusi
echo "Umur Saya Adalah 20 Tahun %#%^*! \n";

// Heredoc
$alamat = <<<BAMBANG
Indonesia - Negara Ku 48@&*^&%^,
Jakarta Timur - Kota Ku,
Jl. Raya Cilangkap - Alamat Ku
BAMBANG;

echo $alamat;

?>