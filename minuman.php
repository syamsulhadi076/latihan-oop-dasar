<?php 

class Minuman {

	public $nama = "nama",
		   $menu = "menu",
		   $rasa = "rasa",
		   $cara_membuat = "cara_membuat",
		   $harga_minuman = "harga_minuman";

	public function namaMinuman() {
		return "$this->nama";
	}

	public function menuMinuman() {
		return "$this->menu";
	}

	public function rasaMinuman() {
		return "$this->rasa";
	}

	public function caraMembuatMinuman() {
		return "$this->cara_membuat";
	}

	public function hargaMinuman() {
		return "$this->harga_minuman";
	}
}

$minuman = new Minuman();
$minuman->nama = "Nama minuman ini adalah Juice.";
$minuman->menu = "Menu minuman ini adalah Juice Buah-buahan.";
$minuman->rasa = "Rasa minuman ini adalah bermacam-macam, ada melon, pepaya, alpukat, dll.";
$minuman->cara_membuat = "Cara membuat minuman ini adalah memblender buahnya dengan mencampur gula, es batu, dan air.";
$minuman->harga_minuman = "Harga minuman ini adalah 7.000-8.000.";

echo $minuman->namaMinuman();
echo "<br>";
echo $minuman->menuMinuman();
echo "<br>";
echo $minuman->rasaMinuman();
echo "<br>";
echo $minuman->caraMembuatMinuman();
echo "<br>";
echo $minuman->hargaMinuman();
echo "<br><br>";

?>