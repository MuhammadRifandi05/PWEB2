<?php
// Menambah Atribut CLASS
class Mahasiswa {
    // Mendeklarasikan atribut publik 'Nama', 'Nim', dan 'Jurusan' untuk menyimpan informasi mahasiswa.
    public $Nama;
    public $Nim;
    public $Jurusan;

    // Tambahkan constructor pada CLASS Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
    // Konstruktor ini akan dipanggil saat objek dari kelas Mahasiswa dibuat dan akan mengatur nilai awal atribut 'Nama', 'Nim', dan 'Jurusan'.
    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;         // Menginisialisasi atribut 'Nama' dengan nilai yang diberikan.
        $this->Nim = $Nim;           // Menginisialisasi atribut 'Nim' dengan nilai yang diberikan.
        $this->Jurusan = $Jurusan;   // Menginisialisasi atribut 'Jurusan' dengan nilai yang diberikan.
    }

    // Buat metode tampilkanData() dalam class Mahasiswa.
    // Metode ini mengembalikan string yang berisi informasi mahasiswa seperti Nama, Nim, dan Jurusan.
    public function tampilkanData() {
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan."; // Mengembalikan string berisi data mahasiswa.
    }
}

// Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
// Membuat objek dari kelas Mahasiswa dengan Nama "Muhammad Rifandi", Nim "230102019", dan Jurusan "Teknik Informatika".
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");

// Menampilkan data mahasiswa yang dihasilkan oleh metode tampilkanData().
echo $Mahasiswa1->tampilkanData();
?>
