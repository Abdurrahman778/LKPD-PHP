<?php
function cari_pecahan($uang) {
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    $hasil = [];

    foreach ($pecahan as $p) {
        $jumlah_pecahan = floor($uang / $p);
        if ($jumlah_pecahan > 0) {
            $hasil[$p] = $jumlah_pecahan;
            $uang -= $jumlah_pecahan * $p;
        }
    }

    return $hasil;
}

// Input nilai uang
$nilai_uang = 14500;

// Cari pecahan yang bisa memenuhi
$hasil = cari_pecahan($nilai_uang);

// Tampilkan hasil
echo "Pecahan uang yang dibutuhkan:\n";
foreach ($hasil as $pecahan => $jumlah) {
    echo "Rp" . number_format($pecahan, 0, ',', '.') . ": $jumlah lembar/keping\n";
}
