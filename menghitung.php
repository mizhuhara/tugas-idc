<?php

// Mendeklarasikan variabel sisi dan menghitung luas persegi
$sisi = 6;
$luas = $sisi * $sisi;
echo "Menampilkan Luas Dari Persegi dengan sisi sama dengan $sisi adalah $luas <br>";

// Fungsi untuk menghitung luas persegi
function rumusPersegi($sisi) {
    $hasil = $sisi * $sisi;
    return $hasil;
}

$s = 10;
$hasilPenjumlahan = rumusPersegi($s);
echo "Hasil dari persegi dengan sisi $s adalah $hasilPenjumlahan <br>";

// Membuat kelas RumusPersegi dengan metode untuk menghitung luas persegi
class RumusPersegi {  
    public function hitungLuas($sisi) {
        $jawaban = $sisi * $sisi;
        return $jawaban;
    }
}

$persegi = new RumusPersegi();
echo "Hasil dari class di atas adalah " . $persegi->hitungLuas(7) . "<br>";

echo "budi";

?>
