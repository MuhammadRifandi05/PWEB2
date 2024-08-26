<?php
// Definisi Class
class Mahasiswa{
    // atribut atau properties
    public $Nama;
    public $Nim;
    public $Jurusan;

    // Constructor
    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;
        $this->Nim = $Nim;
        $this->Jurusan = $Jurusan;
    }

    //Metode atau Function
    public function tampilkanData(){
        return "Nama: $this->Nama,Nim: $this->Nim, Jurusan: $this->Jurusan";
    }
}
// Instansiasi Objek
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
echo $Mahasiswa1->tampilkanData();
?>