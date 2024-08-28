# Jobsheet pertemuan 1 dan 2
Penggunaan kelas dan objek adalah inti dari pemrograman berorientasi objek (OOP). Dalam PHP, kelas mendefinisikan struktur dan perilaku objek, sementara objek adalah instansiasi dari kelas tersebut. Dengan memanfaatkan kelas dan objek, kode dapat diorganisir dengan lebih baik, lebih mudah dipelihara, dan dapat digunakan kembali.

# Implementasi Constructor
Kode ini menunjukkan cara membuat dan menggunakan kelas `Mahasiswa` dalam PHP. Kelas ini mendefinisikan atribut-atribut dasar yang biasanya dimiliki oleh seorang mahasiswa, seperti `Nama`, `Nim`, dan `Jurusan`.

### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi atribut-atribut ketika objek dari kelas `Mahasiswa` dibuat.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.


## Kodingan
```php
<?php
class Mahasiswa {
    // Atribut publik untuk menyimpan informasi mahasiswa.
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi atribut saat objek dibuat.
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa.
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }
}

// Membuat objek Mahasiswa dan menampilkan datanya.
$mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
echo $mahasiswa1->tampilkanData();
?>
```
## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 230102019, Teknik Informatika.
```
# Membuat Class dan Object
Kode ini menunjukkan cara membuat kelas `Mahasiswa` dengan atribut dasar dan metode sederhana untuk menampilkan data mahasiswa.

### **Fitur Utama**
- **Atribut Publik**: Kelas `Mahasiswa` memiliki tiga atribut publik, yaitu `Nama`, `Nim`, dan `Jurusan`.
- **Metode tampilkanData()**: Metode ini mengembalikan informasi mahasiswa dalam bentuk string.


## Kodingan
```php
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa.
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }
}

// Membuat objek Mahasiswa dan mengisi atributnya.
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Muhammad Rifandi";
$mahasiswa1->nim = "230102019";
$mahasiswa1->jurusan = "Teknik Informatika";

// Menampilkan data mahasiswa.
echo $mahasiswa1->tampilkanData();
?>
```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 230102019, Teknik Informatika.
```
# Membuat Metode Tambahan
Kode ini mendemonstrasikan cara membuat kelas Mahasiswa dengan atribut dasar, metode untuk menampilkan data, dan metode untuk memperbarui jurusan mahasiswa.


### **Fitur Utama**
- **Metode updateJurusan()**: Metode ini memungkinkan perubahan jurusan mahasiswa setelah objek dibuat.

## Kodingan
```php
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    // Konstruktor untuk menginisialisasi atribut saat objek dibuat.
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa.
    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }

    // Metode untuk memperbarui jurusan mahasiswa.
    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat objek Mahasiswa, memperbarui jurusan, dan menampilkan datanya.
$mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$mahasiswa1->updateJurusan("Teknik Mesin");
echo $mahasiswa1->tampilkanData();
?>
```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 230102019, Teknik Mesin.
```
# Penggunaan Atribut dan Metode
Kode ini menunjukkan cara membuat kelas `Mahasiswa` dengan atribut dasar, serta metode untuk menampilkan dan memperbarui data mahasiswa, termasuk mengubah jurusan dan NIM.

### **Fitur Utama**
- **Metode setNim()**: Metode ini memungkinkan perubahan nilai NIM mahasiswa.

## Kodingan
```php
<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Mahasiswa: $this->nama, $this->nim, $this->jurusan.";
    }

    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Membuat objek Mahasiswa, memperbarui jurusan dan NIM, serta menampilkan data mahasiswa.
$mahasiswa1 = new Mahasiswa("Muhammad Rifandi", "230102019", "Teknik Informatika");
$mahasiswa1->updateJurusan("Teknik Mesin");
$mahasiswa1->setNim("12345678910");
echo $mahasiswa1->tampilkanData();
?>
```

## Hasil koding
```bash
Mahasiswa: Muhammad Rifandi, 12345678910, Teknik Mesin.
```
# Tugas Kelas Dosen
Kode ini mendemonstrasikan cara membuat kelas `Dosen` dengan atribut dasar, serta metode untuk menampilkan informasi dosen.

### **Fitur Utama**
- **Atribut Publik**: Kelas `Dosen` memiliki tiga atribut publik, yaitu `Nama`, `Nip`, dan `Matakuliah`.
- **Konstruktor**: Konstruktor digunakan untuk menginisialisasi nilai atribut `Nama`, `Nip`, dan `Matakuliah` saat objek `Dosen` dibuat.
- **Metode tampilkanDosen()**: Metode ini mengembalikan informasi dosen dalam bentuk string.


## Kodingan
```php
<?php
// Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
class Dosen{
    public $Nama;
    public $Nip;
    public $Matakuliah;

//Tambahkan constructor pada kelas Mahasisw yang aakan menginisialisasi atribut nama, nim, dan jurusan.
public function __construct($Nama,$Nip,$Matakuliah) {
    $this->Nama = $Nama;
    $this->Nip = $Nip;
    $this->Matakuliah = $Matakuliah;
}

//Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
public function tampilkanDosen() {
    return "Mahasiswa: $this->Nama, $this->Nip, $this->Matakuliah.";
}
}

$Dosen1 = new Dosen("Pak Abdau", " 12345678 ", " Pweb2 ");
echo $Dosen1->tampilkanDosen();
?>
```

## Hasil koding
```bash
Mahasiswa: Pak Abdau, 12345678, Pweb2.

```

## License
Sekian terimakasih berikut adalah penjelasan terkait modul 1  
[MIT](https://choosealicense.com/licenses/mit/)