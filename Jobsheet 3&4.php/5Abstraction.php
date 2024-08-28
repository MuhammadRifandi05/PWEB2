<?php
// Kelas abstrak Pengguna dengan metode abstrak aksesFitur
abstract class Pengguna {
    abstract public function aksesFitur();
}

// Kelas Dosen yang mengimplementasikan metode abstrak aksesFitur
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "aksesDosen";
    }
}

// Kelas Mahasiswa yang mengimplementasikan metode abstrak aksesFitur
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

// Instansiasi objek dari masing-masing kelas
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Menampilkan hasil dari metode aksesFitur() masing-masing objek
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
?>