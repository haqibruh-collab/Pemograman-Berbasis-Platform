<?php

$namaMahasiswa  = "Haqi";
$umur           = 20;
$ipk            = 3.75;
$aktif          = true;
$hobi           = ["membaca", "coding"];

$a = 10;
$b = 3;
echo "10 + 3 = " . ($a + $b) . "<br>";
echo "10 + 3 = " . ($a + $b) . "<br>";
echo "sisa bagi 10/3 = " . ($a % $b) . "<br>";

echo "Halo, $namaMahasiswa! IPK mu $ipk<br>";

$mahasiswa = ["Andi", "Haqi", "Fian"];
foreach ($mahasiswa as $index => $nama) {
    echo ($index + 1) . ". $nama<br>";
}

var_dump($aktif);
?>