<?php

$nama = $_POST["nama"];
$jk = $_POST["jenis_kelamin"];
$umur = $_POST["umur"];
$tgl = $_POST["tanggal"];
$hobi = $_POST["hobi"];

echo "<h2> hasilnya : </h2>";
echo "nama" . $nama ;
echo "</br>";
echo "Jenis Kelamin" . $jk;
echo "</br>";
echo "Umur" . $umur ;
echo "</br>";
echo "Tanggal lahir" . $tgl;
echo "</br>";
echo "Hobi :" .$hobi;
echo "</br>";
?>