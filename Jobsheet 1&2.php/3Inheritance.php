<?php
// Buat class Pengguna dengan atribut nama dan metode getNama().
class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}
// Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
class Dosen extends Pengguna {
    private $Matakuliah;

    public function __construct($nama, $Matakuliah) {
        parent::__construct($nama);
        $this->Matakuliah = $Matakuliah;
    }

    public function getMatakuliah() {
        return $this->Matakuliah;
    }
}
// Instansiasi objek dari class Dosen dan tampilkan data dosen.
$Dosen = new Dosen("Pak Abdau", "PWEB2");
echo $Dosen->getNama();
echo $Dosen->getMatakuliah() // Output: Pemrograman PHP
?>