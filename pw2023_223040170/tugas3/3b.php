<?php
function urutkanAngka($angka) {
    $a = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $a . " ";
            $a++;
        }
        echo "<br>";
    }
}
$angka = 5; 
echo urutkanAngka($angka);
?>
