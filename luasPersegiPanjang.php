<?php 

// deklarasi variabel

$panjang = 3;
$lebar = 4;
$luas = $panjang * $lebar;

echo "Menampilkan Luas Dari Persegi Panjang dengan  $panjang dan $lebar <br>";


function menghitungLuasPersegiPanjang ( $lebar , $panjang){
    $hasil = $panjang * $lebar ;
    return $hasil;
}

$p = 3;
$l = 4;
$hasilPenjumlahan = menghitungLuasPersegiPanjang($p, $l);
echo "Hasil dari luas persegi panjang dengan panjang $p dan lebar $l adalah $hasilPenjumlahan <br>";


class rumusLuasPersegiPanjang {

    public function hitungLuasPesegiPanjang($panjang, $lebar){
        $Jawaban = $panjang * $lebar ;
        return $Jawaban;
    }

}

$luasPersegiPanjang = new rumusLuasPersegiPanjang();
echo "hasil dari kelas tersebut adalah " . $luasPersegiPanjang ->hitungLuasPesegiPanjang(4,5 );

?>