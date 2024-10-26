<?php

// Mendeklarasikan variabel jari-jari dan menghitung keliling lingkaran
$jariJari = 7;
$kelilingLingkaran = 2 * pi() * $jariJari;
echo "Keliling dari lingkaran dengan jari-jari $jariJari adalah $kelilingLingkaran <br>";

// Fungsi untuk menghitung keliling lingkaran
function hitungKelilingLingkaran($jariJari) {
    return 2 * pi() * $jariJari;
}

$r = 10;
$hasilKelilingLingkaran = hitungKelilingLingkaran($r);
echo "Keliling dari lingkaran dengan jari-jari $r adalah $hasilKelilingLingkaran <br>";

// Membuat kelas RumusLingkaran dengan metode untuk menghitung keliling lingkaran
class RumusLingkaran {
    public function hitungKeliling($jariJari) {
        return 2 * pi() * $jariJari;
    }
}

$lingkaran = new RumusLingkaran();
echo "Keliling dari lingkaran menggunakan class adalah " . $lingkaran->hitungKeliling(12) . "<br>";

?>
