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
}

//Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$Mahasiswa1->updateJurusan("Teknik Mesin"); //untuk merubah Jurusan
echo $Mahasiswa1->tampilkanData();
?>