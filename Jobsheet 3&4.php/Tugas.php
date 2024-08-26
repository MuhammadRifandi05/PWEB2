<?php
// Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
class Dosen{
    public $Nama;
    public $Nip;
    public $Matakuliah;

//Tambahkan constructor pada kelas Mahasisw yang aakan menginisialisasi atribut nama, nim, dan jurusan.
public function __construct($Nama,$Nip,$Matakuliah) {
    $this->Nama = $Nama;
    $this->Nip = $Nip;
    $this->Matakuliah = $Matakuliah;
}

//Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
public function tampilkanDosen() {
    return "Mahasiswa: $this->Nama, $this->Nip, $this->Matakuliah.";
}
}

$Dosen1 = new Dosen("Pak Abdau", "12345678", "Pweb2");
echo $Dosen1->tampilkanDosen();
?>