<?php 

class KokiRestoran {

	public $nama = "nama",
		   $alamat = "alamat",
		   $tinggi = "tinggi",
		   $usia = "usia",
		   $tugas = "tugas";

	public function namaKoki() {
		return "$this->nama";
	}

	public function alamatKoki() {
		return "$this->alamat";
	}

	public function tinggiKoki() {
		return "$this->tinggi";
	}

	public function usiaKoki() {
		return "$this->usia";
	}

	public function tugasKoki() {
		return "$this->tugas";
	}
}

$koki = new KokiRestoran();
$koki->nama = "Nama seorang koki ini adalah Fulan bin Fulan.";
$koki->alamat = "Alamat seorang koki ini adalah di Jalan buah batu bandung.";
$koki->tinggi = "Tinggi seorang koki ini adalah 167cm.";
$koki->usia = "Usia seorang koki ini adalah 21 tahun.";
$koki->tugas = "Tugas seorang koki ini adalah memasak menu yang dipesan pelanggan.";

echo $koki->namaKoki();
echo "<br>";
echo $koki->alamatKoki();
echo "<br>";
echo $koki->tinggiKoki();
echo "<br>";
echo $koki->usiaKoki();
echo "<br>";
echo $koki->tugasKoki();
echo "<br><br>";

?>