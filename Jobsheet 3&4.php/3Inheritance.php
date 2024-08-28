<?php
// Kelas dasar Pengguna
class Pengguna {
    // Atribut yang bisa diakses oleh kelas turunan
    protected $nama;

    // Konstruktor untuk menginisialisasi atribut
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen yang mewarisi dari Pengguna
class Dosen extends Pengguna {
    // Atribut tambahan untuk Dosen
    private $matakuliah;

    // Konstruktor untuk menginisialisasi atribut dari kelas dasar dan atribut tambahan
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    // Getter untuk matakuliah
    public function getMatakuliah() {
        return $this->matakuliah;
    }
}

// Instansiasi objek dari kelas Dosen
$dosen = new Dosen("Pak Abdau", "PWEB2");
// Menampilkan nama dan mata kuliah dosen
echo $dosen->getNama() . " ";
echo $dosen->getMatakuliah();
?>