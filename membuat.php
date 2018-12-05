<?php 

class MembuatMakanan {

	public $cara_membuat = "cara_membuat",
		   $bahan = "bahan",
		   $biaya = "biaya",
		   $pekerja = "pekerja",
		   $wadah = "wadah";

	public function caraMembuatMakanan() {
		return "$this->cara_membuat";
	}

	public function bahanMembuatMakanan() {
		return "$this->bahan";
	}

	public function biayaMembuatMakanan() {
		return "$this->biaya";
	}

	public function pekerjaMembuatMakanan() {
		return "$this->pekerja";
	}

	public function wadahMembuatMakanan() {
		return "$this->wadah";
	}
}

$makanan = new MembuatMakanan();
$makanan->cara_membuat = "Cara membuat makanan adalah dengan cara digoreng, direbus, dan dikukus.";
$makanan->bahan = "Bahan yang dibutuhkan untuk membuat makanan adalah tepung, daging, seledri, garam, dll.";
$makanan->biaya = "Biaya yang dibutuhkan untuk membuat makanan adalah 500 ribu";
$makanan->pekerja = "Pekerja untuk membuat makanan adalah koki.";
$makanan->wadah = "Wadah yang digunakan untuk membuat makanan adalah panci, baskom, piring, mangkok.";

echo $makanan->caraMembuatMakanan();
echo "<br>";
echo $makanan->bahanMembuatMakanan();
echo "<br>";
echo $makanan->biayaMembuatMakanan();
echo "<br>";
echo $makanan->pekerjaMembuatMakanan();
echo "<br>";
echo $makanan->wadahMembuatMakanan();
echo "<br><br>";

?>