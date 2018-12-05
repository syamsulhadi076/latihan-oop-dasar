<?php 

class MembuatMinuman {

	public $cara_membuat = "cara_membuat",
		   $bahan = "bahan",
		   $biaya = "biaya",
		   $pekerja = "pekerja",
		   $wadah = "wadah";

	public function caraMembuatMinuman() {
		return "$this->cara_membuat";
	}

	public function bahanMembuatMinuman() {
		return "$this->bahan";
	}

	public function biayaMembuatMinuman() {
		return "$this->biaya";
	}

	public function pekerjaMembuatMinuman() {
		return "$this->pekerja";
	}

	public function wadahMembuatMinuman() {
		return "$this->wadah";
	}
}

$makanan = new MembuatMinuman();
$makanan->cara_membuat = "Cara membuat minuman adalah dengan cara diblender, dicampur es batu, dan buah-buahan.";
$makanan->bahan = "Bahan yang dibutuhkan untuk membuat minuman adalah gula, buah-buahan, susu, seres, toping.";
$makanan->biaya = "Biaya yang dibutuhkan untuk membuat minuman adalah 500 ribu";
$makanan->pekerja = "Pekerja untuk membuat makanan adalah koki.";
$makanan->wadah = "Wadah yang digunakan untuk membuat minuman adalah blender, gelas, mangkok.";

echo $makanan->caraMembuatMinuman();
echo "<br>";
echo $makanan->bahanMembuatMinuman();
echo "<br>";
echo $makanan->biayaMembuatMinuman();
echo "<br>";
echo $makanan->pekerjaMembuatMinuman();
echo "<br>";
echo $makanan->wadahMembuatMinuman();

?>