<?php

// Mendeklarasikan variabel alas dan tinggi serta menghitung luas segitiga
$alas = 10;
$tinggi = 5;
$luas = 0.5 * $alas * $tinggi;
echo "Luas dari segitiga dengan alas $alas dan tinggi $tinggi adalah $luas <br>";

// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

$a = 12;
$t = 8;
$hasilLuas = hitungLuasSegitiga($a, $t);
echo "Luas dari segitiga dengan alas $a dan tinggi $t adalah $hasilLuas <br>";

// Membuat kelas RumusSegitiga dengan metode untuk menghitung luas segitiga
class RumusSegitiga {
    public function hitungLuas($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }
}

$segitiga = new RumusSegitiga();
echo "Luas dari segitiga menggunakan class adalah " . $segitiga->hitungLuas(15, 10) . "<br>";

?>
