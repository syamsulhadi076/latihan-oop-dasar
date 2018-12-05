<?php 

class PelayanRestoran {

	public $nama = "nama",
		   $alamat = "alamat",
		   $tinggi = "tinggi",
		   $usia = "usia",
		   $tugas = "tugas";

	public function namaPelayan() {
		return "$this->nama";
	}

	public function alamatPelayan() {
		return "$this->alamat";
	}

	public function tinggiPelayan() {
		return "$this->tinggi";
	}

	public function usiaPelayan() {
		return "$this->usia";
	}

	public function tugasPelayan() {
		return "$this->tugas";
	}
}

$pelayan = new PelayanRestoran();
$pelayan->nama = "Nama seorang pelayan ini adalah Fulan.";
$pelayan->alamat = "Alamat seorang pelayan ini adalah di Jalan situ patenggang.";
$pelayan->tinggi = "Tinggi seorang pelayan ini adalah 175cm.";
$pelayan->usia = "Usia seorang pelayan ini adalah 20 tahun.";
$pelayan->tugas = "Tugas seorang pelayan ini adalah mengatarkan pesanan ke meja pelanggan.";

echo $pelayan->namaPelayan();
echo "<br>";
echo $pelayan->alamatPelayan();
echo "<br>";
echo $pelayan->tinggiPelayan();
echo "<br>";
echo $pelayan->usiaPelayan();
echo "<br>";
echo $pelayan->tugasPelayan();
echo "<br><br>";

?>