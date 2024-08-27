<?php
// Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
abstract class Pengguna {

    public function __construct() {
    }
    
    abstract public function aksesFitur();

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

$aksesDosen= new Dosen();
$aksesMahasiswa= new Mahasiswa();
echo $aksesDosen->aksesFitur(). "<br>";
echo $aksesMahasiswa->aksesFitur(). "<br>";
?>