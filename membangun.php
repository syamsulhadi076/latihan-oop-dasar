<?php 

class MembangunRestoran {

	public $cara_membangun = "cara_membangun",
		   $bahan = "bahan",
		   $biaya = "biaya",
		   $pekerja = "pekerja",
		   $lokasi = "lokasi";

	public function caraMembangunRestoran() {
		return "$this->cara_membangun";
	}

	public function bahanMembangunRestoran() {
		return "$this->bahan";
	}

	public function biayaMembangunRestoran() {
		return "$this->biaya";
	}

	public function pekerjaMembangunRestoran() {
		return "$this->pekerja";
	}

	public function lokasiMembangunRestoran() {
		return "$this->lokasi";
	}
}

$restoran = new MembangunRestoran ();
$restoran->cara_membangun = "Cara membangun restoran adalah merancang bangunan restoran oleh arsitek, dan membangun bangunan oleh para pekerja bangunan.";
$restoran->bahan = "Bahan yang dibutuhkan membangun restoran adalah batu batu, semen, pasir, genteng, dll.";
$restoran->biaya = "Biaya yang dibutuhkan membangung restoran adalah 100 juta";
$restoran->pekerja = "Pekerja yang membangun restoran adalah para tukang bangunan, beserta mandor, dan arsitek";
$restoran->lokasi = "Lokasi membangun restoran ini adalah di Negara Singapura";

echo $restoran->caraMembangunRestoran();
echo "<br>";
echo $restoran->bahanMembangunRestoran();
echo "<br>";
echo $restoran->biayaMembangunRestoran();
echo "<br>";
echo $restoran->pekerjaMembangunRestoran();
echo "<br>";
echo $restoran->lokasiMembangunRestoran();
echo "<br><br>";

?>