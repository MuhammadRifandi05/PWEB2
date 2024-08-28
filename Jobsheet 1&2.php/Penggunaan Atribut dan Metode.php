<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }

    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Membuat objek Mahasiswa, memperbarui jurusan dan NIM, serta menampilkan data mahasiswa.
$mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$mahasiswa1->updateJurusan("Teknik Mesin");
$mahasiswa1->setNim("12345678910");
echo $mahasiswa1->tampilkanData();
?>