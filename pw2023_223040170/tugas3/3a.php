<?PHP
    // Class lingkaran{
    //     public $r;
    //     function proses($r){
    //         
    //         $luasLingkaran=3.14*$r*$r; 
    //         echo "luas lingkaran  " .$luasLingkaran; echo "cm";
    //         
    //     }
    //     function prosesLingkaran($r){
    //         
    //         $kelilingLingkaran = 22/7*2*$r;
    //         
    //         echo "Kelling Lingkaran ".$kelilingLingkaran; echo "cm";
    //     }
    // }
    
    // $lingkaran = new lingkaran (); 
    // $lingkaran -> proses($r);
    // $lingkaran -> prosesLingkaran($r);
?>
<?php
//    echo "<h4>Menghitung Luas Lingkaran</h4>";
//     $jari = 10;        // variable jari berisi nilai jari-jari
//     $luas = 3.14 * $jari * $jari; //variable rumus perhitungan
//     echo "dengan Jari-jari : $jari <br>";
//     echo "\tHasilnya adalah : ".$luas;  //hasil perhitungan  
//     echo "<hr>"
   
?>

<?php

function hitungLuasLingkaran($r) {
    $luas = 3.14*$r*$r;
    echo "Luas lingkaran dengan jari-jari $r adalah: $luas";
}

function hitungKelilingLingkaran($r) {
    $keliling = 2 * 22/7 * $r;
    echo "jari-jari : $r<br>";
    echo "Keliling lingkaran : $keliling";
}

$r_luas = 10; 
$r_keliling = 20; 

echo "<h4>Hitung Luas Lingkaran</h4>";
hitungLuasLingkaran($r_luas);

echo "<hr>";

echo "<h4>Hitung Keliling Lingkaran</h4>";
hitungKelilingLingkaran($r_keliling);
?>
