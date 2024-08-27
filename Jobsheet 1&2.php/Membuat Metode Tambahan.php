<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;       // Atribut publik 'Nama' yang dapat diakses dari luar kelas.
    public $Nim;        // Atribut publik 'Nim' yang dapat diakses dari luar kelas.
    public $Jurusan;    // Atribut publik 'Jurusan' yang dapat diakses dari luar kelas.

    // Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
    public function __construct($Nama, $Nim, $Jurusan) {
        $this->Nama = $Nama;           // Menginisialisasi atribut 'Nama' dengan nilai yang diberikan saat objek dibuat.
        $this->Nim = $Nim;             // Menginisialisasi atribut 'Nim' dengan nilai yang diberikan saat objek dibuat.
        $this->Jurusan = $Jurusan;     // Menginisialisasi atribut 'Jurusan' dengan nilai yang diberikan saat objek dibuat.
    }

    // Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData() {
        // Mengembalikan string yang berisi informasi nama, NIM, dan jurusan mahasiswa.
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
    }

    // Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
    public function updateJurusan($Jurusan) {
        // Mengubah nilai atribut 'Jurusan' dengan nilai yang baru.
        $this->Jurusan = $Jurusan;
    }
}

// Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
$Mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");

// Memanggil metode updateJurusan() untuk mengubah jurusan mahasiswa.
$Mahasiswa1->updateJurusan("Teknik Mesin");

// Menampilkan data mahasiswa setelah perubahan jurusan.
echo $Mahasiswa1->tampilkanData();
