<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;
    public $Nim;
    public $Jurusan;

//Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
public function __construct($Nama,$Nim,$Jurusan) {
    $this->Nama = $Nama;
    $this->Nim = $Nim;
    $this->Jurusan = $Jurusan;
}

//Buat metode tampilkanData() dalam class Mahasiswa.
public function tampilkanData() {
    return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
}

//Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
public function updateJurusan($Jurusan){
    $this->Jurusan = $Jurusan;
}

//Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
public function setNim($Nim){
    $this->Nim = $Nim;
}
}
//Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$Mahasiswa1->updateJurusan("Teknik Mesin"); //Jurusan menjadi berubah
$Mahasiswa1->setNim("12345678910"); //nilai NIM jadi rubah angkanya
echo $Mahasiswa1->tampilkanData();
?>