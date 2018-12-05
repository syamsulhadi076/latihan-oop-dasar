<?php 

class KasirRestoran {

	public $nama = "nama",
		   $alamat = "alamat",
		   $tinggi = "tinggi",
		   $usia = "usia",
		   $tugas = "tugas";

	public function namaKasir() {
		return "$this->nama";
	}

	public function alamatKasir() {
		return "$this->alamat";
	}

	public function tinggiKasir() {
		return "$this->tinggi";
	}

	public function usiaKasir() {
		return "$this->usia";
	}

	public function tugasKasir() {
		return "$this->tugas";
	}
}

$kasir = new KasirRestoran();
$kasir->nama = "Nama seorang kasir ini adalah Fulanah bin Fulan.";
$kasir->alamat = "Alamat seorang kasir ini adalah di Jalan buah batu.";
$kasir->tinggi = "Tinggi seorang pelayan ini adalah 165cm.";
$kasir->usia = "Usia seorang pelayan ini adalah 19 tahun.";
$kasir->tugas = "Tugas seorang pelayan ini adalah mengatarkan pesanan ke meja pelanggan.";

echo $kasir->namaKasir();
echo "<br>";
echo $kasir->alamatKasir();
echo "<br>";
echo $kasir->tinggiKasir();
echo "<br>";
echo $kasir->usiaKasir();
echo "<br>";
echo $kasir->tugasKasir();
echo "<br><br>";

?>