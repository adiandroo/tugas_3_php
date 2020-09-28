<?php
echo "Tabungan Awal = Rp 150000<br>";
echo "Bunga Setahun = 12.5 %<br>";
echo "Total Tabungan Setahun=?<br>";
echo "Jawaban : Rp ";
$tabunganAwal = 150000;
$bunga = 12.5;
$total = $tabunganAwal * ($bunga / 100);
$hasil = $tabunganAwal + $total;
echo "$hasil";
?>