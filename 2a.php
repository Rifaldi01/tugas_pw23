<?php
$nama_rifaldi = "Rifaldi";
$nama_satya = "Satya";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo $nama_rifaldi . " " . $nama_satya . "<br>";
    } elseif ($angka % 3 == 0) {
        echo $nama_rifaldi . "<br>";
    } elseif ($angka % 5 == 0) {
        echo $nama_satya . "<br>";
    } else {
        echo $angka . "<br>";
    }
}
?>
