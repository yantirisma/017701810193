<?php
/*menggunakan for untuk menghitung jumlah dari suatu bilangan */

$varAwal = 1;
$varAkhir = 10 ;
$jumlah = 0;

for ($i = $varAwal ; $i <= $varAkhir; $i++)
{
$jumlah += $i;
echo $jumlah.", ";
}

echo "<br>";
echo $jumlah;
?>