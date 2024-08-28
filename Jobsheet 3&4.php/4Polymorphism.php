<?php
// Kelas dasar Pengguna dengan metode aksesFitur
class Pengguna {
    public function aksesFitur() {
        return "aksesFitur";
    }
}

// Kelas Dosen yang mewarisi dan mengubah implementasi metode aksesFitur
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "aksesDosen";
    }
}

// Kelas Mahasiswa yang mewarisi dan mengubah implementasi metode aksesFitur
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

// Instansiasi objek dari masing-masing kelas
$pengguna = new Pengguna();
$dosen = new Dosen();
$mahasiswa = new Mahasiswa();

// Menampilkan hasil dari metode aksesFitur() masing-masing objek
echo $pengguna->aksesFitur() . "<br>";
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
?>