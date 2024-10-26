<?php

// Mendeklarasikan variabel jari-jari dan menghitung luas lingkaran
$jariJari = 7;
$luasLingkaran = pi() * pow($jariJari, 2);
echo "Luas dari lingkaran dengan jari-jari $jariJari adalah $luasLingkaran <br>";

// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jariJari) {
    return pi() * pow($jariJari, 2);
}

$r = 10;
$hasilLuasLingkaran = hitungLuasLingkaran($r);
echo "Luas dari lingkaran dengan jari-jari $r adalah $hasilLuasLingkaran <br>";

// Membuat kelas RumusLingkaran dengan metode untuk menghitung luas lingkaran
class RumusLingkaran {
    public function hitungLuas($jariJari) {
        return pi() * pow($jariJari, 2);
    }
}

$lingkaran = new RumusLingkaran();
echo "Luas dari lingkaran menggunakan class adalah " . $lingkaran->hitungLuas(12) . "<br>";

?>
