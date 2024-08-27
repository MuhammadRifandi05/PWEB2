<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;
    public $Nim;
    public $Jurusan;

//Buat metode tampilkanData() dalam class Mahasiswa.
public function tampilkanData() {
    return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
    }
}

//Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
$Mahasiswa1 = new Mahasiswa();
$Mahasiswa1->Nama = "Muhammad Rifandi";
$Mahasiswa1->Nim = "230102019";
$Mahasiswa1->Jurusan = "Teknik Informatika";
echo $Mahasiswa1->tampilkanData();
?>