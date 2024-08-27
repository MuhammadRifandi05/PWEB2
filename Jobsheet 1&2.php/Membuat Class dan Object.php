<?php
// Menambah Atribut dan Metode
class Mahasiswa {
    public $Nama;       // Deklarasi atribut 'Nama' yang bersifat public.
    public $Nim;        // Deklarasi atribut 'Nim' yang bersifat public.
    public $Jurusan;    // Deklarasi atribut 'Jurusan' yang bersifat public.

    // Buat metode tampilkanData() dalam class Mahasiswa.
    public function tampilkanData() {
        // Metode ini mengembalikan sebuah string yang berisi data dari atribut Nama, Nim, dan Jurusan.
        return "Mahasiswa: $this->Nama, $this->Nim, $this->Jurusan.";
    }
}

// Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
$Mahasiswa1 = new Mahasiswa();  // Membuat objek baru dari class Mahasiswa.
$Mahasiswa1->Nama = "Muhammad Rifandi";  // Mengisi atribut 'Nama' dengan nilai "Muhammad Rifandi".
$Mahasiswa1->Nim = "230102019";          // Mengisi atribut 'Nim' dengan nilai "230102019".
$Mahasiswa1->Jurusan = "Teknik Informatika";  // Mengisi atribut 'Jurusan' dengan nilai "Teknik Informatika".

// Menampilkan data mahasiswa menggunakan metode tampilkanData() dari objek $Mahasiswa1.
echo $Mahasiswa1->tampilkanData();  // Output: "Mahasiswa: Muhammad Rifandi, 230102019, Teknik Informatika."
