<?php
class Mahasiswa {
    private $Nama;
    private $Nim;
    private $Jurusan;

    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;
        $this->Nim = $Nim;
        $this->Jurusan = $Jurusan;
    }
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}
$buku1 = new Buku("Pemrograman PHP", "Muhammad Rifandi");
echo $buku1->getJudul(); // Output: Pemrograman PHP
?>