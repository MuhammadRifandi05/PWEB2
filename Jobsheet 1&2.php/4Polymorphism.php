<?php
// Buat class Pengguna dengan metode aksesFitur().
class Pengguna {

    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesFitur";
    }
}

// Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
class Dosen extends Pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesDosen";
    }
}
class Mahasiswa extends Pengguna {
    public function __construct() {
    }
    
    public function aksesFitur() {
        return "aksesMahasiswa";
    }
}

//Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
$aksesPengguna= new Pengguna();
$aksesDosen= new Dosen();
$aksesMahasiswa= new Mahasiswa();
echo $aksesPengguna->aksesFitur(). "<br>";
echo $aksesDosen->aksesFitur(). "<br>";
echo $aksesMahasiswa->aksesFitur(). "<br>";
?>