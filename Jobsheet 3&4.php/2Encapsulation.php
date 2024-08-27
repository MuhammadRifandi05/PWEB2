<?php
// Ubah atribut dalam class Mahasiswa menjadi private.
class Mahasiswa {
    private $Nama;
    private $Nim;
    private $Jurusan;

    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;
        $this->Nim = $Nim;
        $this->Jurusan = $Jurusan;
    }
    //Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
    public function getNama(){
        return $this->Nama;
    }
 
    public function setNama($Nama){
        $this->Nama = $Nama;
    }

    public function getNim(){
        return $this->Nim;
    }

    public function setNim($Nim){
        $this->Nim = $Nim;
    }

    public function getJurusan(){
        return $this->Jurusan;
    }
    
    public function setJurusan($Jurusan){
        $this->Jurusan = $Jurusan;
    }
}
// Demonstrasikan akses ke atribut menggunakan metode getter dan setter.
$Mahasiswa = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
echo $Mahasiswa->getNama();
echo $Mahasiswa->getNim();
echo $Mahasiswa->getJurusan();
?>