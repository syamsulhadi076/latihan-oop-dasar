<?php 

class Makanan {

	public $nama = "nama",
		   $bentuk = "bentuk",
		   $rasa = "rasa",
		   $cara_membuat = "cara_membuat",
		   $harga = "harga";

	public function namaMakanan() {
		return "$this->nama";
	}

	public function bentukMakanan() {
		return "$this->bentuk";
	}

	public function rasaMakanan() {
		return "$this->rasa";
	}

	public function caraMembuatMakanan() {
		return "$this->cara_membuat";
	}

	public function hargaMakanan() {
		return "$this->harga";
	}

}

$makanan1 = new Makanan();
	$makanan1->nama = "Makanan ini adalah Bakso.";
	$makanan1->bentuk = "Bakso ini bentuknya Bulat.";
	$makanan1->rasa = "Rasa bakso adalah asin manis pedas dan gurih.";
	$makanan1->cara_membuat = "Cara membuat bakso adalah dibentuk bulat dengan menggunakan tepung dan daging.";
	$makanan1->harga = "Bakso seporsi harganya 10.000.";

	echo $makanan1->namaMakanan();
	echo "<br>";
	echo $makanan1->bentukMakanan();
	echo "<br>";
	echo $makanan1->rasaMakanan();
	echo "<br>";
	echo $makanan1->caraMembuatMakanan();
	echo "<br>";
	echo $makanan1->hargaMakanan();
	echo "<br><br>";

?>