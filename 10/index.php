<?php 
$dataUmur = array(12, 15, 17, 20, 25, 30, 35, 40, 45, 50);
$anakAnak = array();
$dewasa = array();

echo "List umur : " . implode(", ", $dataUmur);
echo "<br>";

foreach ($dataUmur as $umur) {
    if ($umur < 17) {
        $anakAnak[] = $umur;
    } else {
        $dewasa[] = $umur;
    }
}

echo "Jumlah Anak - Anak adalah = " . count($anakAnak);
echo "<br>";
echo "Jumlah Orang Dewasa adalah = " . count($dewasa);