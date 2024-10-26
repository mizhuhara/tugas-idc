<?php

// Mendeklarasikan variabel panjang dan lebar serta menghitung luas dan keliling persegi panjang
$panjang = 8;
$lebar = 5;
$luas = $panjang * $lebar;
$keliling = 2 * ($panjang + $lebar);
echo "Luas dari persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas <br>";
echo "Keliling dari persegi panjang dengan panjang $panjang dan lebar $lebar adalah $keliling <br>";

// Fungsi untuk menghitung luas dan keliling persegi panjang
function hitungPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar);
    return ["luas" => $luas, "keliling" => $keliling];
}

$p = 10;
$l = 6;
$hasil = hitungPersegiPanjang($p, $l);
echo "Luas dari persegi panjang dengan panjang $p dan lebar $l adalah " . $hasil['luas'] . "<br>";
echo "Keliling dari persegi panjang dengan panjang $p dan lebar $l adalah " . $hasil['keliling'] . "<br>";

// Membuat kelas RumusPersegiPanjang dengan metode untuk menghitung luas dan keliling
class RumusPersegiPanjang {
    public function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    public function hitungKeliling($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }
}

$persegiPanjang = new RumusPersegiPanjang();
echo "Luas dari class adalah " . $persegiPanjang->hitungLuas(12, 7) . "<br>";
echo "Keliling dari class adalah " . $persegiPanjang->hitungKeliling(12, 7) . "<br>";

?>
