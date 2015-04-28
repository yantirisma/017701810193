<?php
$nama = $_POST["nama"];
$umur = $_POST["umur"];
$ipk = $_POST["ipk"];
$progdi = $_POST["progdi"];
$fakultas = $_POST["fakultas"];
$angka1 = $_POST["angka1"];
$angka2 = $_POST["angka2"];

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali = $angka1 * $angka2;
$bagi = $angka1 / $angka2;


echo "Nama saya $nama , umur saya $umur tahun. dan IPK saya $ipk saya berkuliah
 di $progdi $fakultas";
echo "<br>";
echo "Nilai \ $tambah = $tambah";
echo "<br>";
echo "Nilai \ $kurang = $kurang";
echo "<br>";
echo "Nilai \ $kali = $kali";
echo "<br>";
echo "Nilai \ $bagi = $bagi";
?>