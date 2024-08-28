<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa.
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }
}

// Membuat objek Mahasiswa dan mengisi atributnya.
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Muhammad Rifandi";
$mahasiswa1->nim = "230102019";
$mahasiswa1->jurusan = "Teknik Informatika";

// Menampilkan data mahasiswa.
echo $mahasiswa1->tampilkanData();
?>