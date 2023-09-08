<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangga Naik</title>
    <style>
        /* CSS untuk styling */
        body {
            background-color: #f0f0f0; /* Warna latar belakang halaman */
            display: flex;
            
            height: 100vh;
            margin: 0;
        }

        .tangga {
            width: 50px;
            height: 50px;
            margin: 5px; /* Jarak antar kotak */
            border-radius: 5px; /* Membuat sudut kotak menjadi bulat */
            display: inline-block;
        }

        /* Warna latar belakang untuk kotak-kotak */
        .merah {
            background-color: #e74c3c; /* Warna merah */
        }

        .biru {
            background-color: #3498db; /* Warna biru */
        }

        .hijau {
            background-color: #2ecc71; /* Warna hijau */
        }

        .kuning {
            background-color: #f1c40f; /* Warna kuning */
        }

        .ungu {
            background-color: #9b59b6; /* Warna ungu */
        }
        .text-center{
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Susunan kotak seperti tangga naik -->
    <b>
    <div class="tangga merah"><h3 class="text-center">1</h3></div>
    <br>
    <div class="tangga biru"><h3 class="text-center">2</h3></div>
    <div class="tangga merah"><h3 class="text-center">2</h3></div>
    <br>
    <div class="tangga hijau"><h3 class="text-center">3</h3></div>
    <div class="tangga biru"><h3 class="text-center">3</h3></div>
    <div class="tangga merah"><h3 class="text-center">3</h3></div>
    
</body>
</html>
