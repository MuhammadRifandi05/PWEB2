<?php
class Mahasiswa {
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

    // Metode untuk memperbarui jurusan mahasiswa.
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat objek Mahasiswa, memperbarui jurusan, dan menampilkan datanya.
$mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$mahasiswa1->updateJurusan("Teknik Mesin");
echo $mahasiswa1->tampilkanData();
?>