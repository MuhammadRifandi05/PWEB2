<?php
    // Menambah Atribut CLASS
    class Mahasiswa {
        public $Nama;
        public $Nim;
        public $Jurusan;

    //Tambahkan constructor pada CLASS Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($Nama,$Nim,$Jurusan) {
        $this->Nama = $Nama;
        $this->Nim = $Nim;
        $this->Jurusan = $Jurusan;
    }

    //Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData() {
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
    }
}

    //Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
    $Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
    echo $Mahasiswa1->tampilkanData();
?>