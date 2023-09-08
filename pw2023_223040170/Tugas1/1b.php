<?php
// Ambil dua digit terakhir NPM (ganti 23 dengan dua digit terakhir NPM Anda)
$npm_digit_terakhir = 70;

// Hasil awal adalah nilai dari dua digit terakhir NPM
$awal = $npm_digit_terakhir;

// Hasil baris ke-2 adalah hasil kali 5 dari hasil awal
$hasil_baris_2 = $awal * 5;

// Hasil baris ke-3 adalah hasil bagi 2 dari hasil baris ke-2
$hasil_baris_3 = $hasil_baris_2 / 2;

// Hasil baris ke-4 adalah hasil tambah 75 dari hasil baris ke-3
$hasil_baris_4 = $hasil_baris_3 + 75;

// Hasil baris ke-5 adalah hasil kurang 20 dari hasil baris ke-4
$hasil_baris_5 = $hasil_baris_4 - 20;

// Cetak hasil sesuai format yang diminta
echo "Awal = <b>$awal</b><br>";
echo "Hasil baris ke-2 = <b>$hasil_baris_2</b><br>";
echo "Hasil baris ke-3 = <b>$hasil_baris_3</b><br>";
echo "Hasil baris ke-4 = <b>$hasil_baris_4</b><br>";
echo "Hasil baris ke-5 = <b>$hasil_baris_5</b><br>";
?>
