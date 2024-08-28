<?php
class Mahasiswa {
    // Atribut publik untuk menyimpan informasi mahasiswa.
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi atribut saat objek dibuat.
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa.
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }
}

// Membuat objek Mahasiswa dan menampilkan datanya.
$mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>