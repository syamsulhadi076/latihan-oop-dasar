<?php 

class Restoran {

	public $nama = "nama",
		   $tipe = "tipe",
		   $menu = "menu",
		   $lokasi = "lokasi",
		   $pemilik = "pemilik";

	public function namaRestoran() {
		return "$this->nama";
	}

	public function tipeRestoran() {
		return "$this->tipe";
	}

	public function menuRestoran() {
		return "$this->menu";
	}

	public function lokasiRestoran() {
		return "$this->lokasi";
	}

	public function pemilikRestoran() {
		return "$this->pemilik";
	}
}

$restoran = new Restoran();
$restoran->nama = "Nama restoran ini adalah Altierest.";
$restoran->tipe = "Tipe restoran ini adalah bernuansa daerah.";
$restoran->menu = "Menu restoran ini adalah makanan-makanan daerah.";
$restoran->lokasi = "Lokasi restoran ini adalah di Negara Singapura.";
$restoran->pemilik = "Pemilik restoran ini adalah Samsul Hadi.";

echo $restoran->namaRestoran();
echo "<br>";
echo $restoran->tipeRestoran();
echo "<br>";
echo $restoran->menuRestoran();
echo "<br>";
echo $restoran->lokasiRestoran();
echo "<br>";
echo $restoran->pemilikRestoran();
echo "<br><br>";

?>