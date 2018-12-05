<?php 

class WriterRestoran {

	public $nama = "nama",
		   $alamat = "alamat",
		   $tinggi = "tinggi",
		   $usia = "usia",
		   $tugas = "tugas";

	public function namaWriter() {
		return "$this->nama";
	}

	public function alamatWriter() {
		return "$this->alamat";
	}

	public function tinggiWriter() {
		return "$this->tinggi";
	}

	public function usiaWriter() {
		return "$this->usia";
	}

	public function tugasWriter() {
		return "$this->tugas";
	}
}

$writer = new WriterRestoran();
$writer->nama = "Nama seorang writer ini adalah Fulanah.";
$writer->alamat = "Alamat seorang writer ini adalah di Jalan situ batu.";
$writer->tinggi = "Tinggi seorang writer ini adalah 180cm.";
$writer->usia = "Usia seorang writer ini adalah 22 tahun.";
$writer->tugas = "Tugas seorang writer ini adalah menulis pesanan pelanggan.";

echo $writer->namaWriter();
echo "<br>";
echo $writer->alamatWriter();
echo "<br>";
echo $writer->tinggiWriter();
echo "<br>";
echo $writer->usiaWriter();
echo "<br>";
echo $writer->tugasWriter();
echo "<br><br>";

?>